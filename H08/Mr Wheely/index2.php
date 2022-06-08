<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr Wheely</title>
    <link rel="icon" type="image/x-icon" href="MrWheely favicon.png">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">

    </div>
    <form action="index2.php" method="GET">
        <label for="merk">Merk:</label>
        <select id="merk" name="merk">
            <option value="all">-Alle merken-</option>
            <option value="Audi">Audi</option>
            <option value="Ferrari">Ferrari</option>
            <option value="Fiat">Fiat</option>
            <option value="Lamborghini">Lamborghini</option>
        </select>
        <label for="minPrijs">Minimale prijs:</label>
        <input type="text" name="minPrijs" id="minPrijs">
        <label for="maxPrijs">Maximale prijs:</label>
        <input type="text" name="maxPrijs" id="maxPrijs">
        <input type="submit" value="Zoeken">
    </form>

    <?php
    require ('library/Auto.php');
    require ('library/Autooverzicht.php');

    $autoos = new Autooverzicht();

    $minPrijs = isset($_GET['minPrijs']) && !empty($_GET['minPrijs']) ? $_GET['minPrijs'] : 0;
    $maxPrijs = isset($_GET['maxPrijs']) && !empty($_GET['maxPrijs']) ? $_GET['maxPrijs'] : 1000000000;
    $merk = $_GET['merk'];

    $autoos->addAuto('Audi', 102500, 'autoos/Audi1.jpg');
    $autoos->addAuto('Audi', 90750, 'autoos/Audi2.jpg');
    $autoos->addAuto('Ferrari', 122500, 'autoos/Ferrari1.jpg');
    $autoos->addAuto('Ferrari', 167500, 'autoos/Ferrari2.jpg');
    $autoos->addAuto('Fiat', 12500, 'autoos/Fiat1.jpg');
    $autoos->addAuto('Fiat', 26250, 'autoos/Fiat2.jpg');
    $autoos->addAuto('Lamborghini', 171300, 'autoos/Lamborghini1.jpg');
    $autoos->addAuto('Lamborghini', 250500, 'autoos/Lamborghini2.jpg');


    if($merk == 'all'){
        foreach ($autoos->getAutoLijst($minPrijs, $maxPrijs, $merk) as $auto){
            if($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs){
            echo $auto->getMerk() . ' - ' . $auto->getPrijs() . '<br>';        
            echo '<img src="'.$auto->getUrl().'" alt="Autoplaatje"> <br>';
            };
        }; 
    } else {
        foreach ($autoos->getGefilterdeLijst($minPrijs, $maxPrijs, $merk) as $auto){
            echo $auto->getMerk() . ' - ' . $auto->getPrijs() . '<br>';        
            echo '<img src="'.$auto->getUrl().'" alt="Autoplaatje"> <br>';
        }; 
    };
?>
</body>
</html>