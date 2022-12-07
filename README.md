# Introduction
Package ini berfungsi untuk menampilkan jumlah total biaya sewa suatu produk berdasarkan biaya sewa harian, biaya denda jika melewati batas durasi sewa, durasi sewa, dan durasi pengembalian.

## Installation and Usage
1. Install Composer\
Sebelum memulai, anda diharuskan untuk menginstall composer terlebih dahulu, jika composer sudah terinstall sebelumnya. tahapan ini dapat diabaikan. Tutorial lebih lengkap dapat dilihat di [Composer Documentation](https://getcomposer.org/doc/).

2. Require package
```
  composer require sulistianengsih/ceksewa
```

3. Database Migration
```
  php artisan migrate
```

4. Optionally publish package views, assets, or src
```
  php artisan vendor:publish
```
pilih `assets` dan `views` jika ingin menggunakan interface yang sudah disediakan. Pilih `src` jika ingin melakukan publish code di dalam file src package ini ke dalam app folder proyek.

---

## Create Your Own Builder and Concrete Builder
1. Create builder
```
php artisan make:builder BuilderName
```
Builder ini akan disimpan di folder `app/ceksewa/builder` dan dapat digunakan sebagai interface dari concrete builder.

2. Create concrete builder
```
php artisan make:concrete-builder ConcreteBuilderName
```
Concrete Builder akan mengimplementasikan builder yang telah dibuat sebelumnya. Jika ingin tetap menggunakan interface yang telah disediakan, disarankan untuk membuat database migrations dan model yang sesuai dengen kebutuhan concrete product yang dihasilkan oleh concrete builder. 

Selain itu, disarankan juga untuk mengedit file `app/ceksewa/builder/director/Director.php` dan `app/ceksewa/controller/BuildController` sesuai kebutuhan.
