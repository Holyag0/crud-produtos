<?php


use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::resource('views', ProductController::class);


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['auth']], function () {

    Route::match(['get'],'/listar/produtos', 'ProductController@index')->name('views.index');
    Route::match(['get', 'post'],'/cadastrar','ProductController@create')->name('views.create');
    Route::match(['get', 'put'],'alterar/produto', 'ProductController@edit')->name('views.edit');
    Route::match(['get' ],'/detalhes/produto','ProductController@show')->name('views.show');
    Route::match(['get','put'], '/produtos/alterados','ProductController@update')->name('views.update');
});
