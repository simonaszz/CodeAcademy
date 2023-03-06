<?php

class Song
{
    public $songId;
    public $title;
}

$octopusSong = new Song;

$octopusSong->songId = 1;
$octopusSong->title = "Ocotopu's garden";

// var_dump($octopusSong);




class Playlist
{
    public $name;
    public $songs = [];

    public function addSong($song)
    {
        $this->songs[] = $song;
    }
}

$yellowSubmarine = new Song();

$yellowSubmarine->songId = 2;
$yellowSubmarine->title = 'Yellow Submarine';


$playlist = new Playlist();

$playlist->name = 'Rock';

$playlist->addSong($octopusSong);
$playlist->addSong($yellowSubmarine);


var_dump($playlist->songs);
