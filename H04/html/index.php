<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoofdstuk 4</title>
</head>
<body>
<?php
function CtoF ($degreeC){
    $degreeF =$degreeC * 1.8 + 32;
    echo $degreeC." graden Celsius is ".$degreeF." graden Fahrenheit.";
}

CtoF(10);
echo "<br> <br>";

function dividableBy3 ($waarde){
    $answer;
    if($waarde % 3 == 0){
        $answer = "true";
    } else {$answer = "false";}
    return $answer;
}

echo dividableBy3(9);
// Ik weet dat dit eigenlijk een string is maar als ik een boolean waarde teruggaf kreeg ik 1 of 2 te zien.
echo "<br> <br>";

function reverse($string){
    return strrev($string);
}
echo reverse("Daanoontje");

?> 
</body>
</html>
