<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoofdstuk 5</title>
</head>
<body>
    <?php
    function InlogFunctie(){
        $User_arr = array('piet@worldonline.nl', 'klaas@carpets.nl', 'truushendriks@wegweg.nl');
        $WW_arr = array('doetje123', 'snoepje777', 'arkiearkie201');
        $Toegang;
        for($i = 0;$i <= 2;$i++){
            if($_POST['username/email'] == $User_arr[$i] && $_POST['password'] == $WW_arr[$i]){
                $Toegang = true;
                break;
            } else {
                $Toegang = false;
            };
        };
        return $Toegang;
    }
    if(InlogFunctie() == true){
        echo "Welkom!";
    } else {echo "Toegang geweigerd!";};
    ?>
</body>
</html>