<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "es":
        echo "<h1>Bienvenido a la página!</h1>";
        break;
    case "ca":
        echo "<h1>Benvingut a la pàgina!</h1>";
        break;
    case "en":
        echo "<h1>Welcome to the page!</h1>";
        break;
    default:
        echo "<h1>Benvingut a la pàgina!</h1>";
        echo "<p>Idioma per defecte</p>";
        break;
}
?>
