<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangController extends Controller
{
    public function index() 
	{ 
	$barang = 'Aqua 400ML'; 
	return view('barang/index',compact('barang')); 
	}
	
	public function show() 
	{ 
	$barang = ['Aqua 115 ML','Minuman Bersoda','Buku Sejarah','Mouse','CPU']; 
	return view('barang/show',compact('barang')); }
}
