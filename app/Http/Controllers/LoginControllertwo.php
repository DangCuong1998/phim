<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControllertwo extends Controller

{
    public function getRegistertwo(){
    	return view('hometwo.register');
    }
    public function postRegistertwo(Request $request){
    	$firstname = $request->firstname;
    	$email = $request->email;
    	$password = $request->password;
    	$bday = $request->bday;
    	$gender = $request->gender;
    	dd($firstname,$email,$password,$bday,$gender);


   //  	để lưu thông tin đăng kí của người dùng vào database thì trc tiên cần tạo model cho bảng cần lưu trữ vào đã, ở đây tài khoản người dùng là bảng user, htrc có nói r đó
   //  	sử dụng thì bên trong file controller cần sử dụng đến bảng nào thì gọi đến bảng đấy phía bên trên dưới cái này :
   //  	<?php

			// namespace 
   //  	cách thêm vào là use đường dẫn file

   //  	cách lấy thông tin của bảng user thông qua model như sau
   //  	Teenmodel::function , ví dụ như 
   //  	TenModel::all() để lấy tất cả dữ liệu của 

    	
    }
}
