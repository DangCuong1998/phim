<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
	<form method="POST" action= "">
	<table>
		@csrf
		<thead>
			<tr>
				<th>ID</th>
				<th>NameProduct</th>
				<th>PriceProduct</th>
				<th>BuyDay</th>
			</tr>
		</thead>
		<tbody>
			@foreach($product as $pro)
			<tr>
				<td>{</td>
				<td>Bánh kẹo</td>
				<td>20000đ</td>
				<td>6/3/2022</td>
			</tr>
			@endforeach
			<tr>
				<td>2</td>
				<td>Socola</td>
				<td>30000đ</td>
				<td>7/3/2022</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Bim Bim</td>
				<td>40000đ</td>
				<td>8/3/2022</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Nước ngọt</td>
				<td>40000đ</td>
				<td>9/3/2022</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Nướccam</td>
				<td>40000đ</td>
				<td>9/3/2022</td>
			</tr>
		</tbody>
		</form>
	</table>
	<td><button formaction="/phim/public/productadd">Thêm</button></td>
		<td><button formaction="/phim/public/productupdate">Sửa</button></td>
		<td><button formaction="/phim/public/productdelete">Xóa</button></td>
	</form>
</body>
</html>