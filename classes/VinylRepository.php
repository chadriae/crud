<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class VinylRepository
{
    private $databaseManager;
    public $newAddition;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        if (!empty($_POST['add-title'])) {
            $this->newAdditionTitle = $_POST['add-title'];
            $this->newAdditionArtist = $_POST['add-artist'];
            $this->newAdditionYear = $_POST['release-year'];

            $addNewAddition = $this->databaseManager->dbconnection->query("INSERT INTO vinyl (title, artist, releaseyear) VALUES ('$this->newAdditionTitle', '$this->newAdditionArtist', '$this->newAdditionYear')");

            if (!$addNewAddition) {
                var_dump($this->databaseManager->dbconnection->error);
            }
            return $addNewAddition;
        }
        $this->get();
    }

    // public function displayTitle($id)
    // {
    //     $query = "SELECT * FROM vinyl WHERE id = '$id'";
    //     $result = $this->databaseManager->dbconnection->query($query);
    //     if ($result->num_rows > 0) {
    //         $row = $result->fetch_assoc();
    //         return $row;
    //     } else {
    //         echo "Record not found";
    //     }
    // }

    // Get one
    public function find()
    {
    }

    // Get all
    public function get()
    {

        $title = $this->databaseManager->dbconnection->query("SELECT * FROM vinyl");
        // $artist = $this->databaseManager->dbconnection->query("SELECT artist FROM vinyl");

        if (!$title) {
            var_dump($this->databaseManager->dbconnection->error);
        }
        // return $title;
        return $title;
    }

    public function updateTitle($id, string $newTitle)
    {
        $this->databaseManager->dbconnection->query("UPDATE vinyl SET title = '$newTitle' WHERE id = $id");
        header('Location: index.php');
    }

    public function deleteTitle($id)
    {
        $this->databaseManager->dbconnection->query("DELETE from vinyl WHERE id = $id");
        header('Location: index.php');
    }
}
