<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenDemoController extends Controller
{
    // đây là file sử dụng php artisan make:controller --reourcec\
    // nó sẽ tạo ra 1 file controller cơ bản gồm các function người ta hay dùng để làm 1 cái trang thêm sửa xóa
    // ukm
    // cú nhưng mà tạo ra lại mất công xóa mấy cái function kia
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 // sử dụng Request $request để nhận các dữ liệu mà tôi cũng không biết nói như nào ;V
 // chung quy là nhiều thứ lắm rảnh ông đọc hết xem nó có những gì, hay dùng nhất là data form, data truyền từ route ý, hoặc là seesion các thứ, để tôi in ra cho ông xem qua
    // nó nhiều thứ cần dùng đến cái nào thì tìm hiểu thôi còn đâu kệ
    // chứ giờ mà giải thích hết cái này chắc loạn não ;V
    public function tenFunction(Request $request)
    {
        // return "a";

        return view("admin.home");
        
        // câu lệnh trên sẽ trả về cái file kia hiện ra cho người dùng
        // mặc định đường dẫn của nó là đi vào file resource/view; đối với những file trong folder con thì dùng dấu . để đi vào các file con để tôi ví dụ cho dễ hiểu

        // bây giờ thay vì return mấy cái này mình có thể return 1 cái view cho người dùng xem, ông xem đc k
        // ông thử viết đi
        // thế là y như cách viết cũ  
    }

    // cấu trúc cơ bản của 1 cái function trong controller là như này
    // public function thì thôi ông cứ coi là mặc định ng ta bắt viết v đi :v
    // còn cái thứ 3 là tên mình đặt để gọi đến giống javascript ý
    // cái trong dấu ngoặc này là giá trị truyền vào, bên trong function đó có thể sử dụng các giá trị đó, y như function của javascript


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
