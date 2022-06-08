<?php

    class Auto{
    private $merk;
    private $type;
    private $prijs;
    private $url;

    function __construct($merk, $prijs, $url){
        $this->merk = $merk;
        $this->prijs = $prijs;
        $this->url = $url;
    }

    public function getMerk(){
        return $this->merk;
    }

    public function getPrijs(){
        return $this->prijs;
    }

    public function getUrl(){
        return $this->url;
    }

    public function setMerk($merk){
        $this->merk = $merk;
    }

    public function setPrijs($prijs){
        $this->prijs = $prijs;
    }

    public function setUrl($url){
        $this->url = $url;
    }
}
?>