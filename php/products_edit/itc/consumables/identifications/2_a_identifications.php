<?php
    $id = strip_tags($_POST["edit"]);

        /*==================== OBLIGATORY VARIABLE DESCRIPTIONS====================*/
    // DESCRIPTIONS
    $Descriptions= strip_tags($_POST["descriptions"]);
    if($Descriptions==""){$_SESSION["error_incomplet"] =["Descriptions Name Empty"];}
    $brands= strip_tags($_POST["brands"]);
    if($brands==""){$_SESSION["error_incomplet"] =["Brands Name Empty"];}
?>