@extends('component.app')

@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Daftar Soal
        </h2>
        @php
            $soalItem = $paketSoal->daftarSoals->where('nomor_soal', $currentSoal)->first();
        @endphp
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Soal Nomor {{ optional($soalItem)->nomor_soal ?? Request::segment(4) }}
        </h4>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form action="/pakets/soal/{{ $paketSoal->id }}/save" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="currentSoal" value="{{ $currentSoal }}">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Soal</span>
                    <textarea name="namaSoal"
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        id="namaSoal" placeholder="Masukkan Nama Soal">{{ optional($soalItem)->pertanyaan }}</textarea>
                    <span class="text-gray-700 dark:text-gray-400">Masukkan gambar yang dibutuhkan*</span>
                    <br class="m-3">
                    <input class="m-3" type="file" name="imageSoal" id="imageSoal" accept="image/*">
                    <div id="imagePreview">
                        @if ($soalItem && $soalItem->gambar_pertanyaan)
                            <img src="{{ asset('storage/soal/' . $soalItem->gambar_pertanyaan) }}" alt="Gambar Pertanyaan"
                                style="max-width: 300px;">
                        @endif
                    </div>
                </label>

                <div class="mt-4 text-sm">
                    <span class="text-gray-700">
                        Pilihan Jawaban
                    </span>
                    @if ($soalItem && is_array($soalItem->opsi_jawaban) && count($soalItem->opsi_jawaban) > 0)
                        <div class="mt-2">
                            @foreach ($soalItem->opsi_jawaban as $key => $opsi)
                                <input type="radio"
                                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    type="radio" id="option{{ $key }}" name="pilihanJawaban"
                                    value="{{ $key + 1 }}" {{ $soalItem->jawaban == $key + 1 ? 'checked' : '' }} />
                                <span class="ml-2" for="option{{ $key }}">
                                    @php
                                        $abjad = ['A', 'B', 'C', 'D', 'E'];
                                        echo $abjad[$key];
                                    @endphp.
                                    <input type="file" name="jawabanImage[]" id="jawabanImage{{ $key }}"
                                        accept="image/*">
                                    <input type="text" name="jawaban[]" id="jawaban{{ $key }}"
                                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                                        value="{{ $opsi }}" required>
                                </span>
                                <br class="m-3">
                                <!-- Image preview for answer choice -->
                                <div id="jawabanImagePreview{{ $key }}" class="mb-6 mt-3">
                                    @if ($soalItem->gambar_opsi_jawaban)
                                        @php
                                            $gambarOpsiJawaban = json_decode($soalItem->gambar_opsi_jawaban, true);
                                        @endphp

                                        @if (isset($gambarOpsiJawaban[$key]))
                                            <img src="{{ asset('storage/jawaban/' . $gambarOpsiJawaban[$key]) }}"
                                                alt="Gambar Opsi Jawaban" style="max-width: 150px;">
                                        @endif
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @else
                        @for ($key = 0; $key < 5; $key++)
                            <div class="mt-2">
                                <input type="radio" value="{{ $key + 1 }}" id="option{{ $key }}"
                                    name="pilihanJawaban" class="custom-control-input">
                                <input type="radio"
                                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    value="{{ $key + 1 }}" id="option{{ $key }}" name="pilihanJawaban" />
                                <span class="ml-2" for="option{{ $key }}">
                                    @php
                                        $abjad = ['A', 'B', 'C', 'D', 'E'];
                                        echo $abjad[$key];
                                    @endphp
                                    <input type="file" name="jawabanImage[]" id="jawabanImage{{ $key }}"
                                        accept="image/*">
                                    <input type="text" name="jawaban[]" id="jawaban{{ $key }}"
                                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                                        value="" required>
                                </span>
                                <!-- Image preview for answer choice -->
                                <div id="jawabanImagePreview{{ $key }}" class="mb-6 mt-3"></div>
                            </div>
                        @endfor
                    @endif
                </div>
                <div>
                    <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Simpan & Lanjut
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Image preview for question
        $("#imageSoal").change(function() {
            readURL(this, "#imagePreview");
        });

        // Image preview for answer choices
        $('input[name^="jawabanImage"]').change(function() {
            var index = $(this).attr('id').replace('jawabanImage', '');
            readURL(this, "#jawabanImagePreview" + index);
        });

        // Function to read and display image preview
        function readURL(input, previewId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = new Image();
                    img.src = e.target.result;
                    img.onload = function() {
                        var maxWidth = 500; // Set your maximum width
                        var maxHeight = 500; // Set your maximum height
                        var width = img.width;
                        var height = img.height;

                        // Calculate new width and height while maintaining aspect ratio
                        if (width > maxWidth || height > maxHeight) {
                            var ratio = Math.min(maxWidth / width, maxHeight / height);
                            width = width * ratio;
                            height = height * ratio;
                        }

                        $(previewId).html('<img src="' + e.target.result +
                            '" width="' + width + '" height="' + height + '" />');
                    };
                };
                reader.readAsDataURL(input.files[0]);
            }

        }
    });

    function changeSoal(id, currentSoal) {
        window.location.href = "/pakets/soal/" + id + "/" + currentSoal;
    }
</script>
