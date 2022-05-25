<?php
    session_start();
    if(isset($_GET["loguit"])){
        $_SESSION = array();
        session_destroy();
    };
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlog pagina</title>
</head>
<style>
    .red{
        color: red;
        font-size: 16px
    };
</style>
<body>
    <h1>Inloggen</h1>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" name="button" value="Log in">
    </form>
    <?php
    echo "<p class='red'>".$_SESSION['melding']."</p>"
    ?>
</body>
</html>