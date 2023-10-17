<?php 
    $pdf_name = $_SESSION["pdf"]["pdf_name"];
    
  // Le chemin du fichier (path) 
  $file = "../../../../../img/flux/output/$pdf_name"; 
    
  // Type de contenu d'en-tête
  header("Content-type: application/pdf"); 
    
  header("Content-Length: " . filesize($file)); 
    
  // Envoyez le fichier au navigateur.
  readfile($file); 
?>