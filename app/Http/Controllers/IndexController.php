<?php

namespace App\Http\Controllers;

class IndexController extends Controller{
    function index(){
        $title='Watchington Post';
        return view ('index', ['title'=>$title]);
    }
}