<?php
// TITRE
  if ($titre !=""){$titre = $titre;}else{$titre="MHM Warehouse";}
// HEAD
  include_once ("../Layout/Head/header.php");
  include_once ("../Layout/Head/profile.php");
// SIDE
  include_once ("../Layout/Side/sidebar.php");
?>

<!-- START BODY -->
<main id="main" class="main">
<!-- TITLE -->
<?php
  if ($title !=""){$title = $title;}else{$title="Title/title_two.php";}
  include_once ("$title");
?> 
<!-- START ENTER BODY -->
<?php
 if ($section !=""){$section = $section;}else{$section="section dashboard";}
?> 
<section class="<?=$section;?>">