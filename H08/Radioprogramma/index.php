<?php
    include_once ('library/Radioprogramma.php');
    include_once ('library/Songs.php');

$maandagOchtend = new Radioprogramma();
$maandagOchtend->setNaam("Sunshines");
$maandagOchtend->setOmschrijving("Goedemorgen zonder zorgen met Daanoontje-Radio!<br>");

foreach($maandagOchtend->getProgramma() as $prog){
   echo $prog."<br>";
}

$maandagOchtend->addSong(new Songs("Titanium", "David Guetta"));
$maandagOchtend->addSong(new Songs("Arcade", "Duncan Laurence"));
$maandagOchtend->addSong(new Songs("Diamonds", "Rihanna"));

foreach($maandagOchtend->getSong() as $song) {
    echo $song->getSong()." - ".$song->getArtist()."<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP H08</title>
</head>
<body>
    
</body>
</html>