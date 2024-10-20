<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    //This methord for show all Servicess
    public function index()
    {
        echo "show all Servicess";
    }


    //This methord for create Servicess
    public function create()
    {
       return view('admin.services.create');
    }

    //This methord for save  Servicess
    public function save()
    {
        echo "save  Servicess";
    }

    //This methord for edit Servicess
    public function edit()
    {
        echo "edit Servicess";
    }

    //This methord for update Servicess
    public function update()
    {
        echo "update Servicess";
    }

    //This methord for delete Servicess
    public function delete()
    {
        echo "delete Servicess";
    }
}
