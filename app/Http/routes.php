<?php
//---------------------- api -----------------------------//
Route::group(['prefix'=>'api'],function(){

	//global APIs
		Route::get('locations/countries','Api\LocationsCtrl@getCountries');
		Route::get('locations/cities','Api\LocationsCtrl@getCities');
		Route::get('settings/get','Api\getSettings@getSettings');
	//global APIs
	
	//User APIs
		Route::post('users/register','Api\Users@register');
		Route::post('users/login','Api\Users@login');
		Route::post('users/social','Api\Users@loginSocial');
		Route::post('users/logout','Api\Users@logout');
	//User APIs
	
	//Hotels Route .	
		Route::get('hotels/all','Api\HotelsCtrl@getHotels');
		Route::get('hotels/one','Api\HotelsCtrl@getOneHotel');
		Route::get('hotels/search','Api\HotelsCtrl@getSearchHotels'); 
		Route::post('hotels/reservations','Api\HotelsCtrl@startReservations'); 
	//Hotels Route .

	// Countires Api
		
		Route::get('countries/all','api\AllCountries@getCountries');
		Route::get('cities/all','api\AllCities@getCities');

	// Countires Api

	/* Start Cars Api Route */
		Route::get('cars/brand','Api\BrandCtrl@getBrand'); 
		Route::get('cars/offers','Api\OffersCtrl@searchOffers'); 
		Route::get('cars/number','Api\CarsCtrl@nums'); 
	/* End Cars Api Route */
	
	/*// Travel Route To get all countries .
	Route::get('travel/AirLines','Api\TravelCtrl@getAirLines'); */
	

});


Route::get('admin/login','LoginCtrl@showAdminLogin');
Route::post('admin/login','LoginCtrl@postAdminLogin');
Route::get('admin/logout','LoginCtrl@AdminLogout');
	
Route::group(['prefix'=>'admin','middleware'=>'authAdmin'],function(){
	Route::get('/',function()
	{
		return View('admin.layout');
	});

	Route::resource('admins','AdminsCtrl');

	Route::resource('areas','AreasCtrl');
	Route::resource('settings','SettingsCtrl');

	Route::resource('users','UsersCtrl');
	Route::resource('salons','SalonsCtrl');

	Route::resource('cars_brand','CarsBrandCtrl');
	Route::resource('cars_models','CarsModelsCtrl');
	

	Route::get('hotels/delete_img/{id}/{img_name}','HotelsController@img_delete');
	Route::resource('hotels','HotelsController');
	Route::resource('offers','OffersCtrl');
	Route::resource('cars','CarsCtrl');
	
	Route::resource('countries','CountriesCtrl');
	Route::resource('cities','CitiesCtrl');
	

});


/*
//---------------------- notefication -----------------------------//
Route::get('noti',function(){
			$message = PushNotification::Message('msg',array(
	            'msgcnt'=> 1,
	            'title'=>'title',
	            'image'=>'https://www.google.com.eg/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png'
	));

	PushNotification::app('appNameAndroid')
                ->to('f25mwZgO5tE:APA91bFLc4seSr1UryuAh3RSFNUM28bys1sDsNOGhKmlWUJKLO7wc6dbGpPLRI8ybOO26u0lxqqyhPBxQWn-pX36mf_nL9_pUYvNGbIa7Sk-sMY26aW3Dw6KFeMHRoX4ehvvOBfN8TcF')
                ->send($message);
});
//->to('f25mwZgO5tE:APA91bFLc4seSr1UryuAh3RSFNUM28bys1sDsNOGhKmlWUJKLO7wc6dbGpPLRI8ybOO26u0lxqqyhPBxQWn-pX36mf_nL9_pUYvNGbIa7Sk-sMY26aW3Dw6KFeMHRoX4ehvvOBfN8TcF')
*/

