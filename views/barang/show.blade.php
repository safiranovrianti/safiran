<html> 
<head> 
	<title>CONTROL STRUKTUR PADA BLADE TEMPLATE</title> 
</head> 
<body> 
	@if (count($barang)==1) 
		<p>Jumlah Produk adalah satu</p> 
	@elseif(count($barang)>1) 
		<p><b>Perulangan dengan FOR</b></p> 
		@for ($i = 0; $i < count($barang); $i++) 
			<p>{{ 'No :'.$i.' Nama Produk :'.$barang[$i] }}</p> 
		@endfor 
		<hr> 
 
		<p><b>Perulangan dengan FOREACH</b></p> 
		@foreach ($barang as $x => $v) 
			<p>{{ 'No :'.$x.' Nama Produk :'.$v }}</p> 
		@endforeach 
 
		<hr> 
		<p><b>Perulangan dengan WHILE</b></p> 
		@php
			$no = 1;
		@endphp 

		@while ($no<=5) 
			<p>ini adalah perulangan ke {{ $no }}</p> 
		@php
			$no++
		@endphp 
		@endwhile
		@else
			<p>Tidak Ada Data Produk</p>
		@endif
</body>
</html>