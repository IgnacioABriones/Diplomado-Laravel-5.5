<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    
	public function home()
	{
	    $messages = [
            [
	            'id' => 1,
                'content' => 'primer mensaje',
                'image' =>'http://lorempixel.com/600/338?1',
            ],

            [
                 'id' => 2,
                 'content' => 'Segundo mensaje',
                 'image' =>'http://lorempixel.com/600/338?2',
            ],

            [
                 'id' => 3,
                 'content' => 'tercer mensaje',
                 'image' =>'http://lorempixel.com/600/338?3',
            ],

            [
                 'id' => 4,
                 'content' => 'last mensaje',
                 'image' =>'http://lorempixel.com/600/338?4',
            ],
       ];



    return view('welcome', [
        'messages' => $messages,
       ]);
	}

}
