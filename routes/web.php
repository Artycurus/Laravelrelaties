<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   $user = App/user::first();
   
   $post = $user->posts()->create([
    'title' => 'foobar',
    'body'  => 'lorum ipsum'

   ]);

   $post->tags()->attach(1);


   return view('welcome');











});
