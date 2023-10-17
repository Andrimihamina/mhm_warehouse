<?php
/*
================================== ASSOCIATION DES APPLICATION ===========================================
*/
    if($application != "")
    {
    $application= strip_tags($_POST["application"]);
    $_SESSION["error"] =[];}
        /*
        =========SI APPLICATION 0 EXIST =================
        */
    else{$_SESSION["error"] = ["The file isn't complet"];
        }
        
?> 