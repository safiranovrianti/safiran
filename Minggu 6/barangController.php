<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use DB;
class barangController extends Controller 
{ 
	public function index() 
	{ 
		$barang = DB::table('barang') 
				 ->join('kategori','barang.id_kategori','=','kategori.id') 
				 ->get(); 
		return view('barang/index',compact('barang'));
	}
	public function create() 
	{ 
		// 
	}
	public function store(Request $request) 
	{ 
		$barang = DB::table('barang') 
		->insert([ 
			'nama' => 'Lampu', 
			'id_kategori' => 1, 
			'qty' => 14, 
			'harga_beli' => 40000,
			'harga_jual' => 60000,
		]);
		echo "Data Berhasil Ditambah";
	} 
	public function show($id) 
	{ 
		// 
	} 
	public function edit($id) 
	{ 
		// 
	} 
	public function update() 
	{ 
		$barang = DB::table('barang')->where('id',3) 
		->update([ 
			'nama' => 'Bola Lampu', 
			'qty' => 20, 
			'harga_beli' => 45000, 
			'harga_jual' => 55000, 
			]); 
		echo "Data Berhasil Diperbaharui"; 
	} 
	public function delete()
	{
		DB::table('barang')->where('id',3)
		->delete(); echo "Data Berhasil Dihapus"; 
	}
	public function destroy($id) 
	{ 
		
	} 
} 