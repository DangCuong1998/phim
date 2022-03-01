<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',"HomeController@index")->name('home');


Route::get('/login','LoginController@getLogin')->name('login');
Route::get('/register',"LoginController@getRegister");
Route::post('/register',"LoginController@postRegister");


// đây là trang chủ ông
// lỗi 403 đấy của route thường là do đường dẫn trùng vs tên folder trong file public, lưu ý là đặt đường dẫn tránh trùng vs folder trong public, lỗi này nhiều ng hay gặp nên tôi làm cho ô xem
// /home này này, nó trùng vs tên folder trong public


// Route::get('/home',function ()
// {
// 	return redirect(route('home'));
// 	// Forbidden
// 	// You don't have permission to access this resource.
// });

// bây giờ tôi sẽ tạo ra 1 cái form để đăng kí tài khoản
// ông nên để đường dẫn mấy cái dduwwofng dẫn post form đơn giản chung đường dẫn get cho nó dễ

// x chua ong
// toi ghi cmd sai nen no loi
// toàn dùng group nên quên mất cách gọi này
// uk chứ sau nó dùng cái kiểu này đâu
// ak thiếu chữ e
// hiện tại tôi đang vào trang admin, middlware trang này chặn lại và kiểm tra tôi không phải admin nên ko cho vào

// ông khong hiểu đoạn nào để tôi giải thích, ông nói lại đi mic tự dưng bé
// đây mới là admin



// ở đây tôi gọi đến cái file controller có casiclass là TenDemoController bên trong file app/http/controller; sau đó gọi đến function có tên là tenFunction// ukm
// Route::get('/home',function()
// {
// 	return "a";
// })->middleware('vidu-middleware');
// cái cũ là như này

// khi mà chạy đến cái /home này như nãy là nó chạy 1 cái function return "a";
// bây giờ tôi sẽ vứt cái return "a" vào 1 cái file để cho nó đẹp mặt tiện quản lý hơn


// thay cái function này thành tên controller@  + tên function trong controller đó
// giờ là đến liên kết vs controller
// lệnh tạo controller là php artisan make:controller Ten controller
//  tạo 1 cái file controller có cấu trúc CRUD sẵ thì sử dụng -- resource 
// ông lag r ak
// chạy thử xem lỗi j ko
// qua đây gọi đến cái tên ấy

// đang làm demo mà ông,
// sau khi đăng kí middleware thì khai báo middleware trong file Kernel.php ở app/Http
// đăng kí ở trong cái biến này routeMiddleware
// cách dùng cơ bản là như này
// thôi kệ để v cho ông nhìn


// giờ làm middlware luôn nhé
// midđlewảe tác dụng là chặn đường dẫn đấy lại để kiểm tra xem có đủ yêu cầu truy cập không
// um
// file midd thì nằm trong app/htpp/middlware
// lệnh tạo middleware là php artisan make:middleware  tên middlware


// ukm 







Route::get('/kn_admin',"Admin\HomeController@index")->middleware('admin-only');


