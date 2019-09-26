<html>
<head>
	<title>Kategori_Artikel</title>>
</head>

<body>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Nama</td>
			<td>User_Id</td>
		<tr>

	@foreach($Kategori_Artikel as $item)
	<tr>
		<td>{!! $item->id !!}</td>
		<td>{!! $item->nama !!}</td>
		<td>{!! $item->users_id !!}</td>
	</tr>

	@endforeach

</table>
</body>
</html>

		
