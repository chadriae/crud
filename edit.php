<?php

include "./classes/DatabaseManager.php";
include "./classes/VinylRepository.php";
include "config.php";

$database = new DatabaseManager($config['host'], $config['name'], $config['password'], $config['dbname'], $config['port']);
$database->connect();

$vinylRepository = new VinylRepository($database);
$vinyls = $vinylRepository->get();

if (isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];

    // $title = $vinylRepository->displayTitle($editId);

    // var_dump($title);

    if (isset($_POST['new-title'])) {
        $newTitle = $_POST['new-title'];
        $vinylRepository->updateTitle($editId, $newTitle);
    }
}

?>
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

    <h3 class="font-sans text-3xl text-center p-4 text-red-500 font-medium">Update Data</h3>

    <form class="p-4" method="POST">
        <input class="border border-black rounded p-1 mb-2" type="text" name="new-title" value="" placeholder="Enter title" Required>
        <input class="border border-gray rounded p-1 mb-2" type="submit" name="update" value="Update">
    </form>

</body>

</html>