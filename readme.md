
<p align="center">
<img align="center" src="http://ForTheBadge.com/images/badges/built-with-love.svg"> <img align="center" src="http://ForTheBadge.com/images/badges/uses-html.svg"> <img align="center" src="http://ForTheBadge.com/images/badges/makes-people-smile.svg"> <img align="center" src="http://ForTheBadge.com/images/badges/built-by-developers.svg">
</p>

#  SATOTO.AI

**Satoto.ai** merupakan program komputer atau entitas perangkat lunak yang dirancang untuk memberikan bantuan dan melakukan tugas-tugas tertentu untuk pengguna. Virtual asisten ini biasanya menggunakan kecerdasan buatan dan teknologi pemrosesan bahasa alami untuk berkomunikasi dengan pengguna dan menjalankan perintah atau tugas yang diberikan.

## Siapa pembuat aplikasi ini?

| Profile        |  Keterangan                      |
|----------------|----------------------------------|
| Nama           | Bagus Budi Satoto                |
| Jurusan        | S1 - Informatika                 |
| Kampus         | Universitas Amikom Yogyakarta    |

## Cara Mengguanakan 

> Databases : virtualasisten <br>
> Username : root <br>
> Password : <br>
 
 
> STEP 

Buat [KEY API](https://platform.openai.com/account/api-keys) dari chatgpt terlebih dahulu


> STEP 2 

Tambahkan Variable di file .inv lalu masukan key api dari chatgpt

[OPENAI_API_KEY=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](https://github.com/bagussatoto/satoto.ai/blob/main/.env.example)

> STEP 3

Configurasi file .inv sesuai dengan folder penyimpanan projek

> STEP 4

Buat databases dengan nama virtualasisten (sesuaikan dengan settingan di file .inv)

Buka Teriminal lalu jalankan migrationnya <br>
```
php artisan migrate:fresh
```

## Tampilan Website

<img width="900" alt="300" src="https://github.com/bagussatoto/satoto.ai/blob/main/screenshot/1.png">
<img width="900" alt="300" src="https://github.com/bagussatoto/satoto.ai/blob/main/screenshot/2.png">
<img width="900" alt="300" src="https://github.com/bagussatoto/satoto.ai/blob/main/screenshot/3.png">
<img width="900" alt="300" src="https://github.com/bagussatoto/satoto.ai/blob/main/screenshot/6.png">


## Penjelasan 

|<h3>Notes  </h3>       |       Keterangan                                                                  |
|-----------------------|-----------------------------------------------------------------------------------|
|<b>Interaksi Natural   | </b> cenderung dapat berinteraksi dengan pengguna melalui bahasa alami, mirip dengan cara manusia berkomunikasi. Ini mencakup pemahaman bahasa, dan kemampuan untuk memberikan respons yang relevan. |
|<b>Pengembangan Terus-Menerus | </b> Pengembang terus-menerus meningkatkan kemampuan  dengan menambahkan fungsionalitas baru, meningkatkan pemahaman bahasa, dan menyempurnakan respons mereka. |
|<b>Fleksibilitas Platform  | </b> satoto.ai dirancang untuk bekerja di berbagai platform dan perangkat, termasuk ponsel pintar, komputer, dan perangkat pintar lainnya. |


## Cara Instalasi ke Server Lokal :

-   Follow Github Saya
-   Star Repo Github Saya
-   Fork Repo Github Saya
-   Clone project repo saya dengan cara menuliskan pada terminal/cmd/git bash :<br> <b>git clone</b>
``````
git clone https://github.com/bagussatoto/satoto.ai.git
`````` 
-   lalu masuk ke direktori repo yg sudah di clone dengan ketik lg pada terminal/cmd/git bash <b>cd satoto.ai</b>
-   lalu ketik <b>composser install </b> dan <b>php artisan key generate</b>
-   tulis migrate database pada terminal/cmd/git bash : <b>php artisan migrate:install</b>
-   jalankan php artisan db:seed pada terminal/cmd/git bash : <b>php artisan db:seed</b>

<b>Notes :</b> Untuk db:seed jika males untuk mengetikan data, akan dibuatkan langsung oleh laravelnya.

## Alat Yang Digunakan Untuk Membuat Web :

-   XAMP
-   Visual Studio Code
-   Git
-   Cloud (Github)
-   PHP 8.2.0
-   MYSQL 8.2.0
-   Laravel 10
-   Bootstrap  5.3
-   Composer 2.6.5 


## Kritik dan Saran

| *_Silahkan kirim kritik dan saran anda ke email :_*  |
|------------------------------------------------------|
| bagusbudi1308@gmail.com                              |


## Request Fitur Baru dan Pelaporan Bug

Anda dapat meminta fitur baru maupun melaporkan bug melalui menu [**issues**](https://github.com/bagussatoto/satoto.ai/issues) yang sudah disediakan oleh GitHub (lihat menu di atas), posting issues baru dan kita akan berdiskusi disana.

## Berkontribusi

Siapapun dapat berkontribusi pada proyek ini mulai dari pemrograman, pembuakan buku manual, sampai dengan mengenalkan produk ini kepada **mahasiswa**. 
Untuk belajar agar mengurangi kesenjangan pendidikan teknologi dengan cara membuat postingan issue di repository ini.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
</p>
