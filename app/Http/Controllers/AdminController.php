<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminview(request $request)
    {
    	return view('admin.home');
    }
}
