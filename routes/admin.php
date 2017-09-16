<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Admin\MainController@panel')->name('admin.main.panel');

Route::get('/seccion/principal', 'Admin\SeccionController@principal')->name('admin.seccion.principal');
Route::post('/seccion/principal', 'Admin\SeccionController@post_principal')->name('admin.seccion.post.principal');
Route::get('/seccion/quienessomos', 'Admin\SeccionController@quienessomos')->name('admin.seccion.quienessomos');
Route::post('/seccion/quienessomos', 'Admin\SeccionController@post_quienessomos')->name('admin.seccion.post.quienessomos');

Route::get('/seccion/portafolios', 'Admin\SeccionController@portafolios')->name('admin.seccion.portafolios');
Route::get('/seccion/portafolios/add', 'Admin\SeccionController@portafolios_add')->name('admin.seccion.portafolios.add');
Route::post('/seccion/portafolios/add', 'Admin\SeccionController@post_portafolios_add')->name('admin.seccion.post.portafolios.add');

Route::get('/seccion/testimonios', 'Admin\SeccionController@testimonios')->name('admin.seccion.testimonios');
Route::get('/seccion/testimonios/add', 'Admin\SeccionController@testimonios_add')->name('admin.seccion.testimonios.add');
Route::post('/seccion/testimonios/add', 'Admin\SeccionController@post_testimonios_add')->name('admin.seccion.post.testimonios.add');

Route::get('/seccion/categorias', 'Admin\SeccionController@categorias')->name('admin.seccion.categorias');
Route::get('/seccion/categorias/add', 'Admin\SeccionController@categorias_add')->name('admin.seccion.categorias.add');
Route::post('/seccion/categorias/add', 'Admin\SeccionController@post_categorias_add')->name('admin.seccion.post.categorias.add');

Route::get('/seccion/autor', 'Admin\SeccionController@autor')->name('admin.seccion.autor');
Route::post('/seccion/autor', 'Admin\SeccionController@post_autor')->name('admin.seccion.post.autor');

Route::get('/seccion/contacto', 'Admin\SeccionController@contacto')->name('admin.seccion.contacto');
Route::post('/seccion/contacto', 'Admin\SeccionController@post_contacto')->name('admin.seccion.post.contacto');

Route::get('/seccion/blog', 'Admin\SeccionController@blog')->name('admin.seccion.blog');
Route::post('/seccion/blog', 'Admin\SeccionController@post_blog')->name('admin.seccion.post.blog');
Route::get('/seccion/blog/add', 'Admin\SeccionController@blog_add')->name('admin.seccion.blog.add');


Route::get('/mensajes', 'Admin\MainController@mensajes')->name('admin.main.mensajes');
Route::get('/media', 'Admin\MainController@media')->name('admin.main.media');


Route::get('/seccion/noticias', 'Admin\MainController@noticias')->name('admin.seccion.noticias');
Route::get('/seccion/noticias/add', 'Admin\MainController@noticias_add')->name('admin.seccion.noticias.add');
Route::post('/seccion/noticias/add', 'Admin\MainController@post_noticias_add')->name('admin.seccion.post.noticias.add');