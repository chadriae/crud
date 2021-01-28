<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<title>MyVinyl</title>
</head>

<body>

	<h1 class="font-sans text-3xl text-center p-4 text-red-500 font-medium">MyVinyl - track your vinyl collection</h1>
	<form method="POST" class="p-4">
		<input class="border border-black rounded p-1" type="text" name="add-title" placeholder="Title of the album" required></input>
		<input class="border border-black rounded p-1" type="text" name="add-artist" placeholder="Artist of the album" required></input>
		<input class="border border-black rounded p-1" type="number" name="release-year" placeholder="Release year" required></input>
		<input class="border border-gray rounded p-1 cursor-pointer" type="submit" value="Submit">
	</form>

	<ul class="p-8">
		<?php foreach ($vinyls as $vinyl) : ?>
			<li class="border border-gray rounded p-2 mb-2">
				<?= $vinyl['title'] ?> - <?= $vinyl['artist'] ?><br>
				<p class="text-gray-400">Release-date: <?= $vinyl['releaseyear'] ?><br></p>
				<a class="text-blue-600 text-xs" href="edit.php?editId=<?= $vinyl['id'] ?>">edit</a> <a class="text-blue-600 text-xs" href="delete.php?editId=<?= $vinyl['id'] ?>">delete</a>
				<!-- <img src=<?= $vinyl['src'] ?> width=150px height=150px /> -->
			</li>
		<?php endforeach; ?>
	</ul>

</body>

</html>