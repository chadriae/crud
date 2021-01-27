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

<h3>Update Data</h3>

<form method="POST">
    <input type="text" name="new-title" value="" placeholder="Enter title" Required>
    <input type="submit" name="update" value="Update">
</form>