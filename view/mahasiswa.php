<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<a href="add">Add New</a>
	<ul>
	<?php foreach ($data as $value) { ?>
		<li><a href="detail/<?php echo $value->id ?>"><?php echo $value->nama ?></a> | <a href="edit/<?php echo $value->id ?>">Edit</a> | <a href="delete/<?php echo $value->id ?>">Delete</a></li>
	<?php } ?>
	</ul>
</body>
</html>