<?php
    if(!empty($_FILES)){
    $file_name = $_FILES["img"]["name"];
    $file_tmp_name = $_FILES["img"]["tmp_name"];
    //Nom de l'image a manipuler

    $image = $file_tmp_name;

    // On recupere les infos de l'image
    $infos = getimagesize($image);

   
    $largeur = $infos[0];
    $hauteur = $infos[1];
    
    // on cree ue nouvelle image vierge en memoire
    $nouvelleImage = imagecreatetruecolor($largeur, $hauteur);

    switch($infos["mime"]){
        case "image/png" :
            // On ouvre l'image png
            $imageSource = imagecreatefrompng($image);
            break;
        case "image/jpeg" :
            //On ouvre une imae jpeg
            $imageSource = imagecreatefromjpeg($image);
            break;
        default :
            die( "Format d'image incorrect");

    }

    //On copie toute l'image source dans l'image destination en la reduisant
    imagecopyresampled(
        $nouvelleImage, //Image de destinastination
        $imageSource, //Image de depart
        0, //Position x du coin supereeur gauche dans l'image de destination
        0, // Position y du coin supereeur gauche dans l'image de destination
        0, //Position x du coin supereeur gauche dans l'image source
        0, // Position y du coin supereeur gauche dans l'image source
        $largeur, // largeur dans l'image de destination
        $hauteur, // hauteur dans l'image de destination
        $largeur, // largeur dans l'image source
        $hauteur, // hauteur dans l'image source
    );

    //On enregistre la nouvelle image sur le serveur
    switch($infos["mime"]){
        case "image/png":
            //On enregistre l'image
            imagepng($nouvelleImage, __DIR__ . "/../../../../../img/cons_foo_img/consumable-img-". $file_name);
            break;
        case "image/jpeg":
            //On enregistre l'image
            imagejpeg($nouvelleImage, __DIR__ . "/../../../../../img/cons_foo_img/consumable-img-". $file_name);
            break;     
    }
    
    //On detruit les images dans la memoire
    imagedestroy($imageSource);
    imagedestroy($nouvelleImage);
}
?>