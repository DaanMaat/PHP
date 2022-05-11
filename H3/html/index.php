<?php
// Gecombineerd PHP met HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niet werkende website</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    body{
        text-align: center;
    }
    .rood{
        border: 6px solid red;
        width: 100px;
        height: 100px;
    }
    .groen{
        border: 6px solid green;
        width: 100px;
        height: 100px;   
    }
    .Icon{
        width: 50px;
        height: 50px;
    }
    .Cats{
        width: 100px;
        height: 100px;
    }
    </style>
</head>
<body>
    <?php
        for($i = 1; $i<=10; $i++){
            echo "<img class='Cats' src='kat".$i.".jpg'> ";
        }
        echo "<br>";
        $Katten = array("kat1.jpg", "kat2.jpg", "kat3.jpg", "kat4.jpg", "kat5.jpg", "kat6.jpg", "kat7.jpg", "kat8.jpg", "kat9.jpg", "kat10.jpg");
        foreach($Katten as $Kat){
            echo "<img class='Cats' src='".$Kat."'>";
        }
        echo "<br> <br>";
        for($j = 0;$j<23;$j++){
            for($k = 0;$k<$j;$k++){
                echo "*";
            }
            echo "*<br>";
        } 
        echo "<br>"; 
        for($x = 35;$x>=25;$x--){
            echo "hoppelepee";
        }
        echo '<br> <br>';
        for($l = 1;$l <= 10; $l++){
            if($l % 2 == 0){
            echo "<img class='rood' src ='kat".$l.".jpg'>";
        } else {echo "<img class='groen' src ='kat".$l.".jpg'>";}
        }
        echo "<br> <br>";
        $leeftijd = 65;
        $prijs;
        if($leeftijd <= 65 && $leeftijd > 12){
        $prijs = 10;
        } else if ($leeftijd <= 3){
            $prijs = 0;
        } else {$prijs = 5;};
        echo $prijs."<br> <br>";
        
        $spartelkuikens = 25;
        $Waterbuffels = 32;
        $Plonsmderin = 11;
        $Bommetje = 23;
        while($spartelkuikens >= 5){
            echo "<img class='Icon' src='Swimmer.png'>";
            $spartelkuikens-= 5;
        }
        echo "<br>";
        while($Waterbuffels >= 5){
            echo "<img class='Icon' src='Swimmer.png'>";
            $Waterbuffels -= 5;
        }
        echo "<br>";
        while($Plonsmderin > 5){
            echo "<img class='Icon' src='Swimmer.png'>";
            $Plonsmderin -= 5;
        }
        echo "<br>";
        while($Bommetje > 5){
            echo "<img class='Icon' src='Swimmer.png'>";
            $Bommetje -= 5;
        }
        echo "<br> <br>";
        $Zwemclubs["Spartelkuikens"] = 25;
        $Zwemclubs["Waterbuffels"] = 32;
        $Zwemclubs["Plonsmderin"] = 11;
        $Zwemclubs["Bommetje"] = 23;
        foreach($Zwemclubs as $waarde){
           $Swimmers = floor($waarde / 5);
           for($Swimmers > 0; $Swimmers--;){
               echo "<img class='Icon' src='Swimmer.png'>";
           }
           echo "<br>";
        }
        echo "<br>";
        $Kappersagenda = array("Mevr. Pietersen", "Mevr. Willems", "", "Paul van den Broek", "Karel de Meeuw", "");
        print ("De volgende momenten zijn nog beschikbaar:<ul>");
        foreach($Kappersagenda as $tijd => $afspraak){
            if($afspraak == ""){
            switch ($tijd) {
                case 0:
                $tijd = "9:15";
                break;
                case 1:
                $tijd = "9:30";
                break;
                case 2:
                $tijd = "9:45";
                break;
                case 3: 
                $tijd = "10:00";
                break;
                case 4:
                $tijd = "10:15";
                break;
                case 5:
                $tijd = "10:30";
                break;
            }
            print("<li>".$tijd."</li>");
            }
        }
    ?>
</body>
</html>