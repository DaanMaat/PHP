<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO connectie</title>
</head>
<body>
<?php
try{
$user = 'root';
$pass = 'root';
    $dbh = new PDO('mysql:host=dockerphp-master_db_1;dbname=phpschool', $user, $pass);
    foreach($dbh->query('SELECT * from cursist') as $row) {
    print_r ($row);
    };
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$dbh = null;
?> 
    
</body>
</html>