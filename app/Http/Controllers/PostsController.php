<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index($id){
        return 'it works '.$id;
    }

    public function show($id): string
    {
        return 'this is the show function';
    }
}
