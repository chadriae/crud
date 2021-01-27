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

    $vinylRepository->deleteTitle($editId);
}

?>

<h3>Delete Data</h3>

<form method="POST">
    <input type="text" name="new-title" value="<?php echo $title['title'] ?>" placeholder="Enter title" Required>
    <input type="submit" name="update" value="Delete">
</form>