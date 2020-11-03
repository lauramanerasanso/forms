
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

<?php
session_start();
if(isset($_SESSION['wl']))
{

    $art = $_POST['art'];

    array_push($_SESSION['wl'], $art);

}
else
{
    $_SESSION['wl']= array();
    if(isset($_POST['art'])) {
        $art = $_POST['art'];
    }

    array_push($_SESSION['wl'], $art);
}
?>
<h4 style="text-align: center">WISHLIST</h4>
        <?php
            $_COOKIE['PHPSESSID'] = session_id();

            for ($i = 0 ; $i < count($_SESSION['wl']) ; $i++){
                echo $_SESSION['wl'][$i]. '<br>';
            }
        ?>
</body>
</html>

