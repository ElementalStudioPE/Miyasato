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

Route::get('/', 'Web\MainController@home')->name('web.home');
Route::get('/portafolio', 'Web\MainController@portafolio')->name('web.portafolio');
Route::get('/proyecto', 'Web\MainController@proyecto')->name('web.proyecto');
Route::get('/blog', 'Web\MainController@blog')->name('web.blog');
Route::get('/publicaciones', 'Web\MainController@blog_paginacion')->name('web.blog.paginacion');
Route::get('/blog/{publicacion}', 'Web\MainController@publicacion')->name('web.publicacion');

// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('/portafolio', function () {
//     return view('portafolio');
// });

// Route::get('/proyecto', function () {
//     return view('proyecto');
// });

// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');

// Route::get('/publicacion', function () {
//     return view('publicacion');
// });



Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout-ess-admin', function () {

    Auth::logout();

    return redirect()->route('login');

})->name('logout');

Route::post('/login/post', 'LoginController@post')->name('login.post');

Route::post('/form/post', 'PrincipalController@post_form')->name('form.post');


Route::group(['prefix' => 'administrador', 'middleware' => 'auth'], function () {

    include_once 'admin.php';

});





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/admin/login', function(){
	return redirect()->route('login');
});