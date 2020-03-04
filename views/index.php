<?php

// Lancement de la session
    session_start();
// Encodage de la page
    header ("Content-Type: text/html; charset=utf-8");
// Conf générale
    require_once ("../conf/generalConf.php");
    //Test

    if (MODE_TEST ==1) {
        echo "Test activé :".HOST_DATABASE."<br>";
    } else {
        echo "Pas de Test activé :" .EMAIL_SUPPORT_TECH."<br>" ;
    }
    // Autoloader global
    require_once (PATH_MACHINE."autoLoader/AutoLoad.php");

    // Pour afficher les erreurs php
    if (MODE_TEST==1) {
        echo "Test activé <br>";
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }
    // for($i=0;$i<=5;$i++) {
    //     echo $i."<br>";
    // }
    //Appel header general
    require_once ("header.php");

    //Appel body general
    require_once ("body.php");
    
    //Appel footer general
    require_once ("footer.php");
    
