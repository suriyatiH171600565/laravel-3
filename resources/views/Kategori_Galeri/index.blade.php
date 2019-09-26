<html>
<head>
	<title>kategori_galeri</title>>
</head>

<body>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAMA</td>
			<td>KETERANGAN</td>
			<td>PATH</td>
			<td>User Id</td>
		<tr>

	@foreach($kategori_galeri as $item)
	<tr>
		<td>{!! $item->id !!}</td>
		<td>{!! $item->nama !!}</td>
		<td>{!! $item->keterangan !!}</td>
		<td>{!! $item->path !!}</td>
		<td>{!! $item->users_id !!}</td>
	</tr>

	@endforeach

</table>
</body>
</html>