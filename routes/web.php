<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Fahmi Arif',
        'email' => 'fahmiarif96@gmail.com',
        'image' => 'fahmi.jpg'
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Fahmi Arif',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, dolore! Iure dignissimos perspiciatis voluptatem debitis commodi? Nulla illo, molestiae, assumenda officia voluptatem est facere rem animi voluptatibus excepturi accusamus deserunt, debitis iure repellendus autem qui quasi cum? Eius consequatur nesciunt dicta illo, exercitationem aut reiciendis enim laboriosam, quaerat nulla voluptate dolorem vel dolores nihil soluta quas ex sequi labore esse ad, vitae veniam. Reprehenderit minima dolores perspiciatis. Nam blanditiis similique sapiente accusantium iste ullam? Aliquid debitis vel veniam expedita adipisci.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Rahmita Paramita',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, qui iure. Consequuntur maiores labore omnis quibusdam dolore modi sed deserunt atque! Eos quis, dolorum laudantium omnis enim nostrum est maxime quidem magnam placeat consectetur perferendis unde possimus, dicta ullam, rem atque architecto. Alias nihil sit, sunt saepe odit temporibus nisi.'
        ]
    ];

    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});