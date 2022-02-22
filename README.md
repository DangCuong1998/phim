<p>
	1 : Tạo file giao diện trong resource/views
	// index.blade.php
</p>
<p>
	2 : Tạo route trong file routes/web.php
</p>
<p>
	3 : Tạo route với đường dẫn là domain/home với function là function index trong HomeController
	//Route::get('/','HomeController@index')->name('home');
	// Trong route ta định nghĩa này
	// get là phương thức truyền của route, dùng route get khi cần hiển thị ra giao diện
	// biến số thứ nhất được truyền vào là /, đây là đường dẫn được quy định để gọi đến
	// biến số thứ 2 được truyền cào là function thực hiện một hành động nào đó khi gọi đến đường dẫn là /
</p>
<p>
	4 : Tạo file HomeController để ghi các function tạo app/Http/Controller
	// có thể dùng cmd để tạo
	// php artisan make:controller HomeController
</p>
<p>
	5 : trong file app/Http/Controller/HomeController.php ta tạo 1 function là index trả về giao diện
	// mặc định của view trong function goi den la trong file resource/view, không cần phải thêm đuôi file nếu là file blade.php
	// có thể trả về giá trị bất kì để thử nghiệm, ẽ return "abc";
	// public function FunctionName()
    {
    	return view('index');
    }
</p>
<p>
	Tương tự hãy tạo những đường dẫn sau cho giao diện:
	/home
	/detail
	/category
	....
</p>
