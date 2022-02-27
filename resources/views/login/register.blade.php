<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	</head>
	<body>
		<h1 style="text-align: center;">Đăng kí ở đây</h1>


		<div class="container" style="text-align: center;"> <div class="row
		justify-content-center"> <div class="col-md-12"> <div class="card"> 

		                <div class="card-body">
		                    <form method="POST" action="/register">
		                    	<!-- vậy cái này để hôm sau đi -->
		                    	<!-- uk -->
		                    	<!-- ông còn sống k -->
		                    	<!-- bài nay xong r ông, xong midd vs controller r -->

		                    	<!-- trong form của laravel, cần có nhưng cái sau -->
		                    	<!-- @csrf hoặc {{scrf_field()}}  -->
		                    	<!-- cái này chức năng dùng để bảo mật chống tốn công  -->
		                    	<!-- action="" là đường dẫn sẽ thực hiện truyền dữ liệu đến khi form này submit -->
		                    	<!-- method là phương thức truyền, Route::get là cái choo0x get này này, 2 cái hay dùng nhất là get vs post, post thì không hiện trên thanh trình duyệt -->
		                    	<!-- còn 1 cái nữa hay dùng là dùng để khi upload có file  nhưng mà giờ chưa dùng nên để buổi khác -->
		                    	<!-- ông hay dùng ajax k, ò vậy thôi để sau -->
		                    	<!-- mặc dù dùng js không cần truyền cái method vs action vào trong form này, nhưng mà một số trình duyệt không có js hoặc ngta chặn js thì cái ở trên form này sẽ chạy thay thế khi mà ngta chặn hoặc trình duyệt không hỗ trợ js -->
		                    	<!-- nên là cứ viết vào cho chắc kể cả dùng ajax -->
		                        @csrf

		                        <div class="form-group row">
		                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

		                            <div class="col-md-6">
		                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

		                                @error('name')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

		                            <div class="col-md-6">
		                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

		                                @error('email')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

		                            <div class="col-md-6">
		                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

		                                @error('password')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Pass Comfirm</label>

		                            <div class="col-md-6">
		                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
		                            </div>
		                        </div>

		                        <div class="form-group row mb-0">
		                            <div class="col-md-6 offset-md-4">
		                                <button type="submit" class="btn btn-primary">
		                                    Register
		                                </button>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>



	</body>
</html>