@extends('component.app')

@section('content')
<main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
          <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Tabel User
            </h2>
            <div class="flex justify-end">
              <button onclick="window.location.href='{{ route('user.create') }}'"
              class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          Tambah
      </button>
      
            </div>

            <br>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                          <th class="px-4 py-3">Nama</th>
                          <th class="px-4 py-3">Email</th>
                          <th class="px-4 py-3">Password</th>
                          <th class="px-4 py-3">Role</th>
                          <th class="px-4 py-3">Actions</th>
                      </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      @foreach($users as $user)
                      <tr>
                          <td class="px-4 py-4">{{ $user->nama }}</td>
                          <td class="px-4 py-4">{{ $user->email }}</td>
                          <td class="px-4 py-4">{{ $user->password }}</td>
                          <td class="px-4 py-4">{{ $user->level }}</td>
                          <td class="px-4 py-4">
                              <!-- Actions for the user -->
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                  </nav>
                </span>
              </div>
            </div>
          </div>
        </main>
@endsection