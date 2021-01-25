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
        // TODO: replace dummy data by real one
        return [
            ['title' => 'Revolver', 'artist' => 'The Beatles', 'src' => './assets/revolver.jpg', 'release-year' => '1967'],
            ['title' => 'Aja', 'artist' => 'Steely Dan', 'src' => './assets/aja.jpg', 'release-year' => '1977'],
            ['title' => "Who's Next", 'artist' => 'The Who', 'src' => './assets/whos-next.jpg', 'release-year' => '1971'],
            ['title' => 'Bad', 'artist' => 'Michael Jackson', 'src' => './assets/bad.jpg', 'release-year' => '1987'],
            ['title' => 'Ok Computer', 'artist' => 'Radiohead', 'src' => './assets/ok-computer.jpg', 'release-year' => '1997']
        ];

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->database-> (runYourQueryHere)
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
