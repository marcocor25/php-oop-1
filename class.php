<?php

class Movie {

    public $title;
    public $description;
    public $genre;
    public $original_language;

    function __construct($_title, $_description, $_genre, $_original_language)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->genre = $_genre;
        $this->original_language = $_original_language;
    }
    
}

?>