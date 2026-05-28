<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return 'index';
    }
    public function show(){
        return inertia("Show/show",
        [
            'message' => "Hello from the other side",
            'numberPhone' => "09213232123",
        ],
        );
    }
}