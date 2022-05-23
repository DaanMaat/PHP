<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pdo connection</title>
</head>
<body>
<?php
try{
$user = 'root';
$pass = 'root';
    $dbh = new PDO('mysql:host=dockerphp-master_db_1;dbname=phpschool', $user, $pass);
    $correct = false;
    foreach($dbh->query('SELECT * from account') as $row) {
        $email = $row['email'];
        $password = $row['password'];
        $inserted_email = $_POST['e-mail'];
        $inserted_password = $_POST['password'];        
        if($inserted_email == $email  && $inserted_password == $password){
           $correct = true;
            break;
        };
    };
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
} finally {
    echo ($correct) ? 'Welkom!' : 'Invalid username & password combination, access denied!';
}
$dbh = null;
?> 
    
</body>
</html>