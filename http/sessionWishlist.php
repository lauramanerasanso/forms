<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>WishList - Laura Manera Sansó</title>
    <style>
        body{
            color:dimgray;
            background-color:lightblue;
            margin: 2%;
        }
        form{
            text-align: center;
        }
    </style>
</head>
<body>
<h4 style="text-align: center">WISHLIST</h4>
<?php
    $wlist= array();

    $art = $_POST['art'];

    array_push($wlist, $art);

    for ($i = 0 ; $i < count($wlist) ; $i++){
        echo $wlist[$i] . "<br>";
    }
?>
</body>
</html>

