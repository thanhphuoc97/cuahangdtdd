<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>Cửa hàng Alpha</title>
	</head>
	<body>
		@extends('layout')
		@section('content')
		<h3>Chi tiết sản phẩm</h3>
		<?php 
			echo "Mã SP: ".$sp->MaSP.'<br>';
			echo "Tên Sản Phẩm: ".$sp->TenSP.'<br>';
			echo "Đơn Vị: ".$sp->DonVi.'<br>';
			echo "Giá Bán: ".$sp->DonGia.'<br>';
		?>
		@stop
	</body>
</html>