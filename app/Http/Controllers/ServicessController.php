<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicessController extends Controller
{
    public function index(){
        return view('services');
    }
}
