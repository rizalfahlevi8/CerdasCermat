## Panduan Penggunaan

1. Clone repositori ini ke server lokal Anda.
    ```
    git clone https://github.com/rizalfahlevi8/CerdasCermat.git
    ```
2. Masuk ke direktori proyek.
    ```
    cd cerdas_cermat
    ```
3. Instal dependensi dengan Composer.
    ```
    composer install
    ```
4. Salin file .env.example menjadi .env dan atur konfigurasi database.
    ```
    cp .env.example .env
    ```
5. Generate kunci aplikasi untuk .env.
    ```
    php artisan key:generate
    ```
6. Migrasi dan seeding basis data.
    ```
    php artisan migrate:fresh --seed
    ```
7. Jalankan server lokal.
    ```
    php artisan serve
    ```
