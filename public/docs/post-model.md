## Post Model

Membuat model terdapat 2 cara yaitu :
1. Menggunakan CLI
   gunakan perintah 
   ```bash
   php artisan make:model Post -m
   ```
    -m digunakan untuk membuat migration file

2. Menggunakan artisan
   tekan tombol `ctrl+shift+p` pada vscode dan akan muncul command palette, kemudian ketik `artisan` dan pilih `Artisan: Make Model` dan akan muncul dialog untuk membuat model, isikan nama model dan pilih `Create Migration` untuk membuat migration file

Pemberian nama pada model menggunakan CapitalizeCase yang bersifat `singular` dan otomatis akan dibuatkan file migration dengan huruf kecil semua dengan `plural` pada folder `database/migrations`



<p align="center">
  <a href="../../README.md">
    <img src="https://img.shields.io/static/v1?label=Home&message=%F0%9F%8F%A1&color=skyblue">
  </a>
</p>