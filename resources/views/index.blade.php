<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Category</h3>
 
	<a href="/category/tambah"> + Tambah Category Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Id</th>
			<th>kategori</th>
		</tr>
		@foreach($category as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->kategori }}</td>
			<td>
				<a href="/category/edit/{{ $p->category_id }}">Edit</a>
				|
				<a href="/category/hapus/{{ $p->category_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>