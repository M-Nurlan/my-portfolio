<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
	return AdminSection::view($content, 'Dashboard');
}]);

//Route::get('clients', [
//    'as' => 'admin.clients',
//    'uses' => '\App\Http\Sections\Clients@onDisplay',
//]);