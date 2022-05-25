<?php
    session_start();
    try{
        $user = "root";
        $pass = "root";
        $gevonden = false;
        $dbh = new PDO('mysql:host=dockerphp-master_db_1;dbname=phpschool', $user, $pass);
        foreach($dbh->query('SELECT * from account') as $row) {
            $_SESSION['User'] = $_POST['username'];
            $_SESSION['Pass'] = $_POST['password'];
            $username = $row['username'];
            $password = $row['password'];   
            $functie = $row['functie'];
            if ($_SESSION['User'] == $username && $_SESSION['Pass'] == $password){
                echo "Welkom ".$_SESSION['User']." op de website, je functie hier is ".$functie.".<br> <br> <br>";
                if($functie !== 'Administrator'){
                    echo "Insufficient permission to show the contents of this page.";
                } else {
                    echo "Permission validated, access granted!"."<br>";
                    echo "<img src='Mochi en Cheeto.jpg'>";
                };
                $gevonden = true;
            } 
        };
        if(!$gevonden){
        $_SESSION['melding'] = "Incorrect username or password";
        header('location: inlog.php');
        };
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>
<style>
    img{
        width: 600px;
        height: 300px;
    }
</style>
<body>
<p><a href="inlog.php?loguit">Uitloggen</a></p>
</body>
</html>