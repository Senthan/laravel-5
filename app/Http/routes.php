<?php






/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('contact','WelcomeController@contact');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


$router->get('staff', ['as' => 'staff.index', 'uses' => 'StaffController@index']);
$router->get('staff/create', ['as' => 'staff.create', 'uses' => 'StaffController@create']);
$router->post('staff', ['as' => 'staff.store', 'uses' => 'StaffController@store']);
$router->get('staff/{id}/edit', ['as' => 'staff.edit', 'uses' => 'StaffController@edit']);
$router->patch('staff/{id}', ['as' => 'staff.update', 'uses' => 'StaffController@update']);
$router->get('staff/{id}/delete', ['as' => 'staff.delete', 'uses' => 'StaffController@delete']);
$router->delete('staff/{id}', ['as' => 'staff.destroy', 'uses' => 'StaffController@destroy']);