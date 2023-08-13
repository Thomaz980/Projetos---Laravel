<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CustosController;
use App\Http\Controllers\CSVController;

// Exemplo do Livro

Route::get('book_get', function(){
    $result = \App\Book::where('pages_count', '<', 1000)->get();
    return $result;
});

Route::get('book_get', function(){
    $result = \App\Book::where('pages_count', '<', 1000)->first();
    return $result;
});

Route::get('book_get_where_chained', function(){
    $result = \App\Book::where('pages_count', '<', 1000)
    ->where('title', '=', 'My first Book!')
    ->get();

// Where Aggrefates, and other utilities

// Where('field_name, 'operator', 'term');

    where('pages_count', '<', 1000)->where('title', 'LIKE', 'M%');
});

// Where and OrWhere

Route::get('book_get_where_complex', function(){
    $result = \App\Book::where('title', 'LIKE', '%Second%')
    ->orWhere('pages_count', '>', 140)
    ->get();
});

Route::get('book_get_where_more_complex', function(){
    $results = \App\Book::where(function($query){
        $query
            ->where('pages_count', '>', 120)
            ->where('title', 'LIKE', '%Book%');
    })->orWhere(function($query){
        $query
            ->where('pages_count', '<', 200)
            ->orWhere('description', '=', '')
            ->get();
    });
});



// Updating Operations

Route::get('book_update', function(){
    $book = \App\Book::find(1);
    $book->title = 'My first Book!';
    $book->pages_count = 150;
    $book->save();
});

// Delete Operations

Route::get('bool_delete', function(){
    \App\Book::find(1)->delete();
});






























Route::get('/', [CustosController::class, 'index'])->name('inicio');

Route::post('/registro', [CustosController::class, 'store'])->name('registro');

Route::get('/editar/{id}', [CustosController::class, 'edit'])->name('atualização');

Route::put('/editar', [CustosController::class, 'update'])->name('editar');

Route::get('/deletar/{id}', [CustosController::class, 'destroy'])->name('deletar');

Route::get('/mostrar', [CustosController::class, 'show'])->name('mostrar');

Route::get('/login', function()
{
    return view('login');
})->name("login");

// Rota CSV
Route::post('/ler-csv', [CSVController::class, 'readCSV'])->name("csv");
Route::get('/mostrar-csv', function()
{
    return view('csv');
})->name("mostrar-csv");


Route::get('/', function()
{
    return view("home");
});

// Route::get('/dashboard', function()
// {
//     return Inertia::render('Dashboard');
// })->name('dashboard');

