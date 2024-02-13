<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NessController extends Controller
{
    public function index(){
        return view('admin.profile');
    }
}
