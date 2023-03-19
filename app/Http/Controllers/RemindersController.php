<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemindersController extends Controller
{
    public function index()
    {
        return view('admin.reminders.index');
    }

    public function addEvent()
    {
        return view('admin.reminders.addEvent');
    }
}
