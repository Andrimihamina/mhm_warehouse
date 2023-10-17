<?php
    $id = strip_tags($_POST["edit"]);
  
    /*==================== OBLIGATORY VARIABLE DESCRIPTIONS====================*/
    // DESCRIPTIONS
    $Descriptions= strip_tags($_POST["descriptions"]);
    if($Descriptions==""){$_SESSION["error_incomplet"] =["Descriptions Name Empty"];}
    $brands= strip_tags($_POST["Maker"]);
    if($brands==""){$_SESSION["error_incomplet"] =["Maker Name Empty"];}
    $serealNumber= strip_tags($_POST["serealNumber"]);
    if($serealNumber==""){$_SESSION["error_incomplet"] =["Sereal Number Name Empty"];}
    $states= strip_tags($_POST["states"]);
    if($states==""){$_SESSION["error_incomplet"] =["States Name Empty"];}
   
    /*==================== NOT OBLIGATORY VARIABLE ====================*/
        $model= strip_tags($_POST["model"]);
        $manifDate = strip_tags($_POST["manifDate"]); 
        $Check= strip_tags($_POST["Check"]);
        $IntControl = strip_tags($_POST["IntControl"]); 
?>