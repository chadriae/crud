<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class VinylRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
    }

    // Get one
    public function find()
    {
    }

    // Get all
    public function get()
    {

        $result = $this->databaseManager->dbconnection->query("SELECT title FROM vinyl");

        if (!$result) {
            var_dump($this->databaseManager->dbconnection->error);
        }
        return $result;
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
