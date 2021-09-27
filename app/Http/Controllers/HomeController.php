<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
class HomeController extends Controller
{
    public function getIndex(){
        $sanpham = sanpham::all();
        return view('product', ['sanpham' => $sanpham]);//truyen bien $sanpham sang trang product.plade.php
    }

    public function getProductdetail($masp){
        $sp = sanpham::where('MaSP', $masp)->first();
        return view('productdetail', compact('sp'));
    }
}