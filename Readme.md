## Tahapan Instalisasi Project
1. Clone project dari repository
2. Akses project dari terminal (command prompt)
3. Jalankan perintah 'composer instal' untuk mendownload dependensi
4. Copy file '.env.example' dan rename menjadi '.env'
5. Jalankan perintah 'php artisan key:generate'

## Menyiapkan database
1. Buat file 'database.sqlite' di dalam folder 'database/'
2. Jalankan perintah 'php artisan key:generate'

## Menjalankan server
1. Pastikan seluruh dependensi telah terinstal
2. Pastikan key sudah digenerate
3. Pastikan database sudah disiapkan
4. Jalankan perintah 'php artisan serve'

## Latihan 
1. Buat controller baru dengan nama SupplierController
2. Daftarkan path /supplier pada route web.php
3. Buat list supplier dengan pada view supplier.index
4. Tampilkan list supplier pada view supplier.index
5. Buat halaman detail supplier, tampilkan informasi detail pada view supplier.detail

## Membuat model. migration, dan seeder (Supplier)
1. php artisan make:model Supplier --migration
2. php artisan make:seeder SupplierSeeder

## Buka seeder
1. php artisan db:seed --class=SupplierSeeder

## Latihan
1. Buat model, migration dan seeder untuk data Supplier dengan struktur tabel :
id, name (varchar(150)), phone (varchar(15)), address (text, nullable)
2. Buat seeder untuk menambahkan data Supplier dummy
3. Tampilkan data list supplier pada view supplier.index, gunakan model Supplier untuk memanggil data list supplier dari tabel

## Lanjutan :
1. Buat form tambah dan edit produk pada masing - masing view
2. Gunakan ProdukController untuk menghandle post request
3. Gunakan model Produk untuk menyimpan data produk dan mengupdate

