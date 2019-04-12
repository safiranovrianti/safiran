<html>
<head>
	<title>Barang</title>
</head>
<body>
	<h1>Data Barang</h1>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
			</tr>
		</thead>
		<tbody>

		@foreach ($barang as $i => $v)
				<tr>
					<td>{{ $i+1 }}</td>
					<td>{{ $v }}</td>
				</tr>
		@endforeach
		</tbody>
</table>
</body>
</html>