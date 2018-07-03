<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){

	Route::get('/profile/{slug}', [
		'uses' => 'ProfilesController@index',
		'as' => 'profile'
	]);
	Route::get('/users-list', function(){
		$users = \App\User::all();

		foreach ($users as $user) {
			echo "<a href='/profile/{$user->slug}'>". $user->slug . "</a><br>";
		}
	});








});


