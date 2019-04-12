<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
class barangController extends Controller 
{ 
	public function index() 
	{ 
		$barang = ['Meja','Kursi','Buku','Lampu'];
		return view('barang.index',compact('barang'));
	} 
	public function create() 
	{ 
		// 
	}
	public function store(Request $request) 
	{ 
		// 
	} 
	public function show($id) 
	{ 
		// 
	} 
	public function edit($id) 
	{ 
		// 
	} 
	public function update(Request $request, $id) 
	{ 
		// 
	} 
	public function destroy($id) 
	{ 
		// 
	} 
} 