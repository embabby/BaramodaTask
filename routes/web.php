<?php


//   Route::get('login', ['as' => 'admin.login', 'uses' => 'Admin\AdminController@getLogin']);
//   Route::get('register', ['as' => 'admin.register', 'uses' => 'Admin\AdminController@getRegister']);
//   Route::post('login', ['as' => 'admin.login.post', 'uses' => 'Admin\AdminController@postLogin']);
//   Route::post('register', ['as' => 'admin.register.post', 'uses' => 'Admin\AdminController@postRegister']);
//   Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'Admin\AdminController@getDashboard'])->middleware('admin');
//   Route::get('logout', ['as' => 'admin.logout', 'uses' => 'Admin\AdminController@getLogout']);


//   Route::get('vue', function () {
//     return view('welcome');
// });

  Route::get('/', ['as' => 'home.dashboard', 'uses' => 'HomeController@getDashboard']);

 //Surveys
 Route::resource('/survey', 'SurveyController');
 Route::get('/survey/delete/{id}', ['as' => 'survey.delete', 'uses' => 'SurveyController@getDelete']);


 //Custom inputs
 Route::get('/survey/settings/{id}', ['as' => 'survey.settings', 'uses' => 'CustomController@Settings']);
 Route::get('/custom/create/{survey_id}', ['as' => 'custom.create', 'uses' => 'CustomController@createCustom']);
 Route::post('/custom/store/{survey_id}', ['as' => 'custom.store', 'uses' => 'CustomController@storeCustom']);

 Route::get('/custom/edit/{id}', ['as' => 'custom.edit', 'uses' => 'CustomController@editCustom']);
 Route::put('/custom/update/{id}', ['as' => 'custom.update', 'uses' => 'CustomController@updateCustom']);
 Route::get('/custom/delete/{id}', ['as' => 'custom.delete', 'uses' => 'CustomController@deleteCustom']);







  Route::group(['middleware' => 'admin'], function () {

  	//Clients
	 Route::resource('/client', 'Admin\ClientController');
   Route::get('/client/delete/{id}', ['as' => 'client.delete', 'uses' => 'Admin\ClientController@getDelete']);
	 Route::get('/client/service/all/{id}', ['as' => 'client.service.all', 'uses' => 'Admin\ClientController@allServices']);
   Route::get('/client/service/create/{id}', ['as' => 'client.service.create', 'uses' => 'Admin\ClientController@CreateService']);
   Route::post('/client/service/store', ['as' => 'client.service.store', 'uses' => 'Admin\ClientController@StoreService']);
   Route::get('/client/service/edit/{id}', ['as' => 'client.service.edit', 'uses' => 'Admin\ClientController@EditService']);
   Route::post('/client/service/update/{id}', ['as' => 'client.service.update', 'uses' => 'Admin\ClientController@UpdateService']);


   //Media
   Route::resource('/media', 'Admin\MediaController');
   Route::get('/media/delete/{id}', ['as' => 'media.delete', 'uses' => 'Admin\MediaController@getDelete']);


   //Services
   Route::resource('/service', 'Admin\ServiceController');
   Route::get('/service/delete/{id}', ['as' => 'service.delete', 'uses' => 'Admin\ServiceController@getDelete']);

   Route::get('/subcat/{id}', [
  'uses' => 'Admin\MediaController@getsubcat',
  ]);
   

  	});
