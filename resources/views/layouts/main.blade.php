<!-- <h1> Đầu</h1> -->
@include('layouts.header')
<!-- phạm vi ăn là j
tôi xóa cái include r đây -->
<!-- đây nhé giờ tôi làm các cái này cho ông xem -->
<!-- giờ tôi xóa cái yield này đi -->
@yield('content')
<!-- đã làm đc j đâu mà thực hành, nãy h ms có 4 5 dòng -->
<!-- ukm xong nó thay vào vị trí này -->

 <!-- nó mang gắn vào đâ -->

<!-- <div class="container">
	<h1>day là noi dung trong section content</h1>
</div>
 -->
<!-- uk -->
<!-- mđây là thằng cha của nó -->

<!-- ông nhìn cái tên của yield -->
<!-- bên kia gọi section(content) thì nó sẽ bê cái html đấy nhét vào cái yield có tên tương ứng -->
<!-- đấy là nội dug sau khi xóa cái yield(content) đi -->
<!-- hiện tại là nội dung hiển thị bao gồm file header và file footer -->
<!-- <h1>Đuôi</h1> -->
@include('layouts.footer')


<!--  cái này này, 
cái yield này là giống kiểu cái middleware đặt tên cho cái middleware
        vidu-middleware ViduMiddleware::class,
kiểu cái này này, đặt tên cho nó là vidu-middleware,

khi mà ở cái file con liên kết với file này qua cái hàm

yield thì là ở file cha

còn section là ở file con là sao file content j, thôi cái này nhớ bằng thực hành đi lý thuyết khó tả lắm, đây để tôi làm thực hành cho ông xem chức năng, chứ nói hơi khó tả -->
