<html>
<head>
	<title>galeri</title>>
</head>

<body>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>nama</td>
			<td>keterangan</td>
			<td>path</td>
			<td>User Id</td>
		<tr>

	@foreach($galeri as $item)
	<tr>
		<td>{!! $item->id !!}</td>
		<td>{!! $item->nama !!}</td>
		<td>{!! $item->keterangan !!}</td>
		<td>{!! $item->path!!}</td>
		<td>{!! $item->users_id !!}</td>
	</tr>

	@endforeach

</table>
</body>
</html>