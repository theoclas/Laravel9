<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function blog(){
        $posts = [
            ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
            ['id' => 1, 'title' => 'laravel', 'slug' => 'laravel']
        ];

        return view('blog', ['posts' => $posts]);
        // return view('welcome');
    }

    public function post($slug){
        $post = $slug;
        return view('post', ['post' => $post]);
    }
}
