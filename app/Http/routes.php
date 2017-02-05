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



/*
 * admin route.......
 */
Route::group(['middleware'=>['web','admin']],function(){

//data table ajax
    Route::get('/adminpanel/users',['as'=>'adminpanel.users.index', 'uses'=>'userController@anyData']);

 Route::get('/adminpanel/bu/data',['as'=>'adminpanel.bu.data', 'uses'=>'buController@anyData']);



    #main admin ...............................................
    Route::get('/adminpanel/','userController@index');

    #USERS.....................................................

     Route::resource('/adminpanel/users','userController');

    Route::post('/adminpanel/users/edite','userController@edit');

    Route::post('/adminpanel/users/changePassword','userController@updatePassword');
     Route::get('/adminpanel/users/{id}/delete','userController@destroy');

#site sitting

    Route::get('/adminpanel/siteSetting','siteSettingController@index');
    Route::post('/adminpanel/siteSetting','siteSettingController@store');


#Real Estate.....................................................

      Route::get('/adminpanel/bu','buController@index');
     Route::resource('/adminpanel/bu','buController');
    // Route::post('/adminpanel/bu/{id}/edite','userController@edit');
    Route::get('/adminpanel/bu/{id}/delete','buController@destroy');




});





/*
 * user route.......
 */
Route::group(['middleware'=>'web'],function() {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');

    });

    Route::get('/home', 'HomeController@index');
});