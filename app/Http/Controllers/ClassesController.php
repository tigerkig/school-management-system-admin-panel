<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index()
    {
        return view('admin.classes.index');
    }

    public function detail()
    {
        return view('admin.classes.detail');
    }
}
