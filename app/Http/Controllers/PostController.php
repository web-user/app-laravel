<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    //
    public function index($id) {
        // return 'My Post ID: '.$id;
        $post = Post::find($id);

        dd($post);
    }
}
