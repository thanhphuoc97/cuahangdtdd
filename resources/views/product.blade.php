<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>Cửa hàng Alpha</title>
	</head>
	<body>
		@extends('layout')
		@section('content')
		<?php  ?>
		<h1>Danh Sách Điện Thoại</h1>
		<table border="1">
			<tr>
				<th>Mã SP</th>
				<th>Tên SP</th>
				<th>Đơn Vị</th>
				<th>Giá Bán</th>
			</tr>
			<?php
			foreach ($sanpham as $sp)
				{
					echo '<tr>';
					echo '<td>'.$sp->MaSP.'</td>';
					$url = action('HomeController@getProductdetail', ['MaSP' => $sp->MaSP]);
					echo '<td>'."<a href='".$url."'>".$sp->TenSP.'</td>';
					echo '<td>'.$sp->DonVi.'</td>';
					echo '<td>'.$sp->DonGia.'</td>';
					echo '</td>';
				}
			?>
		</table>
		@stop
	</body>
</html>