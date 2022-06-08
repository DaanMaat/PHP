<?php

class Radioprogramma {
    private $naam = "";
    private $omschrijving = "";
    private $songs = array();

    /*
     * Geeft programma info
     * @return mixed
     */
    function getProgramma(){
        return array("naam" => $this->naam, "omschrijving" => $this->omschrijving);
    }
        
    function setNaam($naam){
        $this->naam = $naam;
    }

    function setOmschrijving($omschrijving){
        $this->omschrijving = $omschrijving;
    }

    function addSong($songs){
        $this->songs[] = $songs;
    }

    function getSong(){
        return $this->songs;
    }     
};
?>