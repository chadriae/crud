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
            $this->newAddition = $_POST['add-title'];

            $addNewAddition = $this->databaseManager->dbconnection->query("INSERT INTO vinyl (title) VALUES ('$this->newAddition')");

            if (!$addNewAddition) {
                var_dump($this->databaseManager->dbconnection->error);
            }
            return $addNewAddition;
        }
        $this->get();
    }

    // Get one
    public function find()
    {
    }

    // Get all
    public function get()
    {

        $title = $this->databaseManager->dbconnection->query("SELECT title FROM vinyl");
        // $artist = $this->databaseManager->dbconnection->query("SELECT artist FROM vinyl");

        if (!$title) {
            var_dump($this->databaseManager->dbconnection->error);
        }
        // return $title;
        return $title;
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
