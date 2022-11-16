<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    //
    public function index($id) {
        return 'My name ID: '.$id;
    }
}
