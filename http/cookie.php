<?php
    if(isset($_COOKIE['countVisits'])){
        echo "Has visitat la pàgina un total de " .$_COOKIE['countVisits']." vegades en el darrer any.";
        setcookie('countVisits', $_COOKIE['countVisits']+1, time()+365*24*60*60);
    } else {
        setcookie('countVisits', 0, time()+365*24*60*60);
        echo "Benvingut a la pàgina. Has visitat la pàgina un total de " .$_COOKIE['countVisits']." vegades en el darrer any.";
    }
?>
