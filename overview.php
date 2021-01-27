<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>MyVinyl</title>
</head>

<body>

	<h1>MyVinyl - track your vinyl collection</h1>
	<form method="POST">
		<input type="text" name="add-title" placeholder="Title of the album" required></input>
		<input type="text" name="add-artist" placeholder="Artist of the album" required></input>
		<input type="number" name="release-year" placeholder="Release year" required></input>
		<input type="submit" value="Submit">
	</form>

	<ul>
		<?php foreach ($vinyls as $vinyl) : ?>
			<li>
				<?= $vinyl['title'] ?> - <?= $vinyl['artist'] ?><br>
				Release-date: <?= $vinyl['releaseyear'] ?><br>
				<a href="edit.php?editId=<?= $vinyl['id'] ?>">edit</a> <a href="delete.php?editId=<?= $vinyl['id'] ?>">delete</a>
				<!-- <img src=<?= $vinyl['src'] ?> width=150px height=150px /> -->
			</li>
		<?php endforeach; ?>
	</ul>

</body>

</html>