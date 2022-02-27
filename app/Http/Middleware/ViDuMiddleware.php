<?php

namespace App\Http\Middleware;

use Closure;

class ViDuMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        // hiện tại là khi chạy qua Middleware này no0s cho chạy tiếp tục
        // cái return next request này là chạy tiếp tục cái yêu cầu mà nó đòi chạy
        // ở đây là return a

        // viidu giờ muốn check 1 cái gì đó

        // else ak, uk nếu cái if mà sai thì ns chạy qua else
            $check = "admin";
            // ví dụ tôi là admin
            // cái này là đang đặt để demo vì đã đăng nhập đâu
            // ví dụ hiện tại người dùng là admin
// tôi nhớ hình như ở đây k return string đc thử xem
            // ukm
            // ông thử luôn đi xem nhớ đc đoạn nào k :v
            
        if ($check == "admin") {
            // ví dụ chỉ có admin mới vào được mấy cái link mà có Middleware vidu-middleware
            return $next($request);
        } else {
            // redirect là chuyển hướng trang hiện tại đến một trang nào đó,
            // như ở đây hiện tại người dùng là user nên không chạy được vào trang admin, nên mình sẽ chuyển hướng người ta về lại trang chính
            // trong redirect sẽ chuyền vào đường dẫn đích mình cần chuyển ngta đến
            // ;v tôi thì để cái bát bên cạnh
            return redirect('/');
            // ak lộn không được return view ở middleware nhé
            // đây là file kiểm tra quyền mà ông, chạy qua file này chạy đến cái return $next($request); thì nó mới chạy đến controller
            // quen ko viet duoi file
            // uk
        }
        
        
    }
}
