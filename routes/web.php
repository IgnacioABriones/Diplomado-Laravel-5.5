<?php

/*
create something great!
*/

Route::get('/', function () {
    
    $links = [
    	'https://platzi.com/laravel' => 'Curso de Laravel',
    	'https://laravel.com' => 'Pagina de Laravel'
    ];
    return view('welcome', [
    		//'teacher' => 'Ignacio Briones',
    		'links' => $links,
    	]);
});

Route::get('/acerca', function(){
	return view('about');
});