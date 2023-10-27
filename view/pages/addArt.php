<!DOCTYPE html>
<html>
<head>
	<title>tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<br/>
	<a href="tampil.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA Pengguna</h3>
	<form method="post" action="/aStuff/controllers/artsController.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>Art Name</td>
				<td><input type="text" name="art_name"></td>
			</tr>
			<tr>
				<td>dateAdded</td>
				<td><input type="date" name="date_added"></td>
			</tr>
			<tr>
				<td>Creator</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="img"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>