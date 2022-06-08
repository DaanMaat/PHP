<?php

    class Autooverzicht{
    private $autoos;

    function __construct(){
        $this->autoos = $autoos;
    }

    public function getAutoLijst(){
        return $this->autoos;
    }

    public function addAuto($merk, $prijs, $url){
        $autootje = new Auto($merk, $prijs, $url); 
        $this->autoos[] = $autootje;
    }

    public function getGefilterdeLijst($minPrijs, $maxPrijs, $merk){
        $gefilterdeLijst = [];
        foreach($this->autoos as $auto){
            if ($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs && $auto->getMerk() == $merk){
                $gefilterdeLijst[] = $auto;
            }
        }
    return $gefilterdeLijst;
    }
};
?>