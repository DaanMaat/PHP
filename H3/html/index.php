<?php
// Gecombineerd PHP met HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katten</title>
    <style>
    body{
        text-align: center;
    }
    .rood{
        border: red, solid, 6px;
    }
    .groen{
        border: green, solid, 6px;
    }
    </style>
</head>
<body>
    <?php
        for($i = 0; i<=10; $i++){
            echo "<img src ='kat".$i.".jpg>";
        }

        $Katten = array("kat1.jpg", "kat2.jpg", "kat3.jpg", "kat4.jpg", "kat5.jpg", "kat6.jpg", "kat7.jpg", "kat8.jpg", "kat9.jpg", "kat10.jpg");
        foreach($Katten as $Kat){
            echo $Kat;
        }
        echo "<br>";
        for($j = 0; j<21; j++){
            for($k; $k<$j; $k++){
                echo "*";
            }
            echo "*<br>";
        }
        for($x = 35;$x>=25;$x--){
            echo "hoppelepee";
        }
        for($i = 0; i<=10; $i++){
            if($i % 2 == 0){
            echo "<img class="rood" src ='kat".$i.".jpg>";
        } else {echo "<img class="groen" src ='kat".$i.".jpg>";}
        }
        $leeftijd = 65;
        $prijs;
        if($leeftijd <= 65 && $leeftijd > 12){
        $prijs = 10;
        } else if ($leeftijd <= 3){
            $prijs = 0;
        } else {$prijs = 5;};
        echo $prijs;
        
        $spartelkuikens = 25;
        $Waterbuffels = 32;
        $Plonsmderin = 11;
        $Bommetje = 23;
        for($spartelkuikens = 25; $spartelkuikens >= 5; $spartelkuikens-5){
            echo "<img src='Swimmer.png'>";
        }
        for($Waterbuffels = 32; $Waterbuffels >= 5; $Waterbuffels-5){
            echo "<img src='Swimmer.png'>";
        }
        for($Plonsmderin = 11; $Plonsmderin >= 5; $Plonsmderin-5){
            echo "<img src='Swimmer.png'>";
        }
        for($Bommetje = 23; $Bommetje >= 5; $Bommetje-5){
            echo "<img src='Swimmer.png'>";
            $Bommetje - 5;
        }
        $Zwemclubs["Spartelkuikens"] = 25;
        $Zwemclubs["Waterbuffels"] = 32;
        $Zwemclubs["Plonsmderin"] = 11;
        $Zwemclubs["Bommetje"] = 23;
        foreach($Zwemclubs as $label => waarde){
           $Swimmers = floor($waarde / 5);
           for($Swimmers > 0; $Swimmers--){
               echo "<img src='Swimmer.png'>"
           }
           echo "<br>"
        }
        $Kappersagenda[9.15] = "Mevr. Pietersen";
        $Kappersagenda[9.30] = "Mevr. Willems";
        $Kappersagenda[9.45] = "";
        $Kappersagenda[10.00] = "Paul van den Broek";
        $Kappersagenda[10.15] = "Karel de Meeuw";
        $Kappersagenda[10.30] = "";
        print ("De volgende momenten zijn nog beschikbaar:<ul>");
        foreach($Kappersagenda as $tijd => $afspraak);
        if($afspraak == ""){
            print("<li>".$tijd."</li>");
        }
    ?>
</body>
</html>