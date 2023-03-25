## Searching and Pagination

##### Add Searching for Post
Tambahkan form search pada `posts.blade.php` pada folder `resources/views/posts` dengan kode berikut:
```php
<form action="" method="GET">
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
    <button class="btn btn-outline-secondary" type="submit">Search</button>
  </div>
</form>
```
- Name `search` pada input berfungsi untuk menyimpan nilai yang diinputkan pada form search. 
- Value `{{ request('search') }}` berfungsi untuk menampilkan nilai yang diinputkan pada form search saat klik tombol search.
- Type `submit` berfungsi untuk mengirimkan data yang diinputkan pada form search sehingga dapat berjalan dengan menekan tombol enter.

Disini juga menambahkan jika user mencari kata tetapi tidak ada hasil yang cocok maka akan menampilkan pesan `No result found for {{ request('search') }}` dengan kode berikut:
```php
@if ($posts->count() == 0)
  <div class="alert alert-danger">
    No result found for {{ request('search') }}
  </div>
@endif
```

##### Testing Form Searching
Lakukan test terhadap form search yang telah dibuat dengan cara masukkan keyword pada form search dan tekan tombol search. Kemudian lakukan `dump and die` pada `PostController.php` pada folder `app/Http/Controllers` untuk melihat hasilnya.
```php
public function index()
{
  dd(request('search'));
}
```
Jika berhasil maka akan menampilkan hasil pencarian yang diinputkan pada form search.

##### Menjalankan query search pada database
Untuk menjalankan query search pada database maka tambahkan kode berikut pada `PostController.php` pada folder `app/Http/Controllers`:
```php
public function index()
{
  $posts = Post::when(request('search'), function ($query) {
    $query->where('title', 'like', '%' . request('search') . '%')
          ->orWhere('body', 'like', '%' . request('search') . '%');
  });

  return view('posts', [
    'posts' => $posts->get();
  ]);
}
```

<p align="center">
  <a href="../../README.md">
    <img src="https://img.shields.io/static/v1?label=Home&message=%F0%9F%8F%A1&color=skyblue">
  </a>
</p>