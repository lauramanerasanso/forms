<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title> Formulari WishList - LMS</title>
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
<header>
    <h1 style="text-align: center">Formulari</h1>
</header>
<form action="sessionWishlist.php" method="post">
    <label for="art">Article:</label>
    <input type="text" id="art" name="art" placeholder="Ordinador"><br><br>
    <input type="submit" value="Afegir a la Wishlist">
</form>
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

