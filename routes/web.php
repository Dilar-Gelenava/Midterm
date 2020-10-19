
<?php

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

use Illuminate\Http\Request;

Route::get('/', "HomeController@home");

Route::post('/store/book', "Bookscontroller@store_book")->name("storebook");

Route::get('/filter/book', "Bookscontroller@filter_book")->name("filterbook");

Route::get('/filtered/books', "Bookscontroller@filtered_books")->name("filteredbooks");

Route::post("/store/book", "BooksController@store_book")->name("storebook");

Route::get("/show/book/{id}","BooksController@show_book")->name("showbook");

Route::post("/delete/book", "BooksController@delete_book")->name("deletebook");

Route::get("/edit/book/{id}","BooksController@edit_book")->name("editbook");

Route::post("update/book","BooksController@update_book")->name("updatebook");