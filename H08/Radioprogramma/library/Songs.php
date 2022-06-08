<?php

class Songs{
private $song = "";
private $artist = "";

function __construct($song, $artist){
    $this->song = $song;
    $this->artist = $artist;
}
function getSongs(){
    return array("song" => $this->$song, "artist" => $this->$artist);
}

function getSong(){
    return $this->song;
}

function getArtist(){
    return $this->artist;
}
};
?>