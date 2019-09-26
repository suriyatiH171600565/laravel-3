<html>
<head>
	<title>artikel</title>>
</head>

<body>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Judul</td>
			<td>Isi</td>
			<td>NAMA</td>
			<td>User Id</td>
		<tr>

	@foreach($artikel as $item)
	<tr>
		<td>{!! $item->id !!}</td>
		<td>{!! $item->judul !!}</td>
		<td>{!! $item->isi !!}</td>
		<td>{!! $item->nama !!}</td>
		<td>{!! $item->users_id !!}</td>
	</tr>

	@endforeach

</table>
</body>
</html>