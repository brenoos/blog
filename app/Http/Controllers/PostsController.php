<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
   public function index(){

       $posts = [
           0 => [
               'titulo' => 'Post 1',
               'conteudo' => 'Este é o primeiro Post'
           ],
           1 => [
               'titulo' => 'Post 2',
               'conteudo' => 'Este é o segundo Post'
           ],
            2 => [
                'titulo' => 'Post 3',
                'conteudo' => 'Este é o terceiro Post'
            ],
       ];

       return view('posts.index', compact('posts'));
   }
}
