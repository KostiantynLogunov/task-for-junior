<?php


use App\Category;


Auth::routes();

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' =>['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');

    Route::resource('/category', 'CategoryController', ['as'=>'admin']);

    Route::resource('/product', 'ProductController', ['as'=>'admin']);
});

Route::match(['get', 'post'], '/', 'HomeController@index')->name('home.index');
Route::match(['get', 'post'], '/left', 'HomeController@left')->name('home.left');
Route::match(['get', 'post'], '/right', 'HomeController@right')->name('home.right');
Route::match(['get', 'post'], '/noslider', function () {
    return view('no-slider',[
        'categories' => Category::all(),
    ]);
})->name('home.noslider');
Route::match(['get', 'post'], '/{id}', 'HomeController@show')->name('home.show');







//Route::get('/home', 'HomeController@index')->name('home');
