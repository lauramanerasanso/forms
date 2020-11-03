<?php
session_start();
if(isset($_SESSION['count']))
{
    echo "Has visitat la pàgina " . $_SESSION['count'] . " vegades.";
    $_SESSION['count'] = $_SESSION['count'] + 1;
}
else
{
    $_SESSION['count'] = 0;
    echo "Benvingut a la pàgina. L'has visitada " . $_SESSION['count'] . " vegades.";
}
?>