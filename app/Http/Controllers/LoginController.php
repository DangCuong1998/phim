<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	// ông nên đặt tên các thứ theo một quy tắc để dễ nhớ với lẫn lộn nhé, không đến lúc quen tay hơi khó sửa
    public function getRegister()
    {
    	return view('login.register');
    }
}
