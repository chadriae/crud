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

	<ul>
		<?php foreach ($vinyls as $vinyl) : ?>
			<li><?= $vinyl['title'] ?> - <?= $vinyl['artist'] ?><br>
				Release-date: <?= $vinyl['release-year'] ?><br>
				<img src=<?= $vinyl['src'] ?> width=150px height=150px />
			</li>
		<?php endforeach; ?>
	</ul>

</body>

</html>