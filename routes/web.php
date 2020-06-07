<?php

// Route::get('email', function() {
//   return new App\Mail\LoginCredentials(App\User::first(), '123456');
// });

// DB::listen(function($query){
//   var_dump($query->sql);  Para saber cuantas consultas se estan ejecutando
// });


Route::get('/', 'PagesController@welcome')->name('pages.welcome');
Route::get('blog', 'PagesController@home')->name('pages.home');
Route::get('nosotros', 'PagesController@about')->name('pages.about');
Route::get('archivo', 'PagesController@archive')->name('pages.archive');
Route::get('contacto', 'PagesController@contact')->name('pages.contact');

Route::get('blog/{post}', 'PostsController@show')->name('posts.show');
Route::get('categorias/{category}', 'CategoriesController@show')->name('categories.show');
Route::get('tags/{tag}', 'TagsController@show')->name('tags.show');

Route::group(['prefix' => 'admin',
              'namespace' => 'Admin',
              'middleware' => 'auth'],
function() {

  Route::get('/', 'AdminController@index')->name('dashboard');

  Route::resource('posts', 'PostsController', ['except' => 'show', 'as' => 'admin']);
  Route::resource('users', 'UsersController', ['as' => 'admin']);
  Route::resource('roles', 'RolesController', ['except' => 'show', 'as' => 'admin']);
  Route::resource('permissions', 'PermissionsController', ['only' => ['index', 'edit', 'update'], 'as' => 'admin']);

  Route::middleware('role:Admin')->put('users/{user}/roles', 'UsersRolesController@update')->name('admin.users.roles.update');
  Route::middleware('role:Admin')->put('users/{user}/permissions', 'UsersPermissionsController@update')->name('admin.users.permissions.update');

  Route::post('posts/{post}/photos', 'PhotosController@store')->name('admin.posts.photos.store');
  Route::delete('photos/{photo}', 'PhotosController@destroy')->name('admin.photos.destroy');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
if ($options['register'] ?? true) {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
}

// Password Reset Routes...
if ($options['reset'] ?? true) {
    Route::resetPassword();
}

// Email Verification Routes...
if ($options['verify'] ?? false) {
    Route::emailVerification();
}
