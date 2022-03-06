<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
	// ông nên đặt tên các thứ theo một quy tắc để dễ nhớ với lẫn lộn nhé, không đến lúc quen tay hơi khó sửa

	public function getLogin()
	{
		return view('account.login');
	}
    public function getRegister()
    {
    	return view('account.register');
    }
    public function postRegister(Request $request)
    {

    	$name = $request->name;
    	$email= $request->email;
    	$password = $request->password;
    	$password_confirmation = $request->password_confirmation;
    	

         //     để lưu thông tin đăng kí của người dùng vào database thì trc tiên cần tạo model cho bảng cần lưu trữ vào đã, ở đây tài khoản người dùng là bảng user, htrc có nói r đó
   //   sử dụng thì bên trong file controller cần sử dụng đến bảng nào thì gọi đến bảng đấy phía bên trên dưới cái này :
   //   <?php

            // namespace 
   //   cách thêm vào là use đường dẫn file

   //   cách lấy thông tin của bảng user thông qua model như sau
   //   Teenmodel::function , ví dụ như 
   //   TenModel::all() để lấy tất cả dữ liệu của 
//         để lưu thông tin đăng kí của người dùng vào database thì trc tiên cần tạo model cho bảng cần lưu trữ vào đã, ở đây tài khoản người dùng là bảng user, htrc có nói r đó
//         sử dụng thì bên trong file controller cần sử dụng đến bảng nào thì gọi đến bảng đấy phía bên trên dưới cái này :
//         <?php

//             namespace 
//         cách thêm vào là use đường dẫn file

//         cách lấy thông tin của bảng user thông qua model như sau
//         Teenmodel::function , ví dụ như 
//         TenModel::all() để lấy tất cả dữ liệu của 
// TenModel::all() để lấy tất cả dữ liệu của bảng TenModel
//         TenModel::first() để lấy ra 1 dòng đầu tiên nó tìm thấy trong bảng;
//         một số câu lệnh cơ bản hay dùng :
//         TenModel::where('điều kiện')
//         câu truy vấn đầu tiên sẽ sử dụng :: để kết nối với model, còn những câu truy vấn tiếp theo sẽ dùng ->; ví dụ
//         TenModel::where('điều kiện 1')
//         ->where('điều kiện 2')
//         ->where('điều kiện n + 1');
// Fizet Kenno21:09
// cuối các câu lệnh customer như này sẽ sử dụng get() để trả về đúng kiểu dự liệu thường hay sử dụng cho foreach và in ra bn phía ng dùng, hoặc dụng first() nếu lấy dòng đầu tiên nhận đc,
//         TenModel::where('điều kiện 1')
//         ->where('điều kiện 2')
//         ->where('điều kiện n + 1')
//         ->get();
// Để thêm dữ liệu vào 1 bảng: 
//         Sử dụng câu lệnh cấu trúc như sau 
//         $ten_bien_tuy_y = new TenModel;
//         $ten_bien_tuy_y->column_trong_bảng = Giá trị cần lưu vào column_trong_bảng;
//         $ten_bien_tuy_y->save();
// Để update 1 dòng dữ liệu trong database
//         Sử dụng câu lệnh như sau
//         $ten_bien_tuy_y = TenModel::find('id_column');
//         find là tìm đến cái dòng có id  = id_column, nó trả về kết quả duy nhất,
//         có thể dùng các câu lệnh truy vấn tương tự để thay thế như kiểu
//         TenModel::where('điều kiện 1')
//         ->where('điều kiện 2')
//         ->where('điều kiện n + 1')
//         ->first();
        // first() là để lấy cái đầu tiên

//         ('id',3)
// ('id','<',2)
// ('id',3) là id = 3
// sau đó update các cột cần update
//         $ten_bien_tuy_y->cột_cần_update = Giá trị mới;
//         $ten_bien_tuy_y->update();

//         Câu lệnh xóa;

//         Tương tự như update nhưng dùng delete thay vì update()

            $Them = new User;
            $Them->name =$name;
            $Them->email=$email;
            $Them->password=$password;
            $Them->save();


            // $capnhat = User::find('3');
            // $capnhat ->name = 'cuongdang';
            // $capnhat->update();

            // $capnhat = User::where('id',3)->first();
            // $capnhat->name ='cuongdq1';
            // $capnhat->update();

            // $xoa = User::find('3');
            // $xoa->name ='cuongdq';
            // $xoa->delete();
    }
}
