<?php
if(isset($_POST["edit_descriptions"], $_POST["edit_definitions"], $_POST["edit"])
/*==================== OBLIGATORY VARIABLE ====================*/
  && !empty($_POST["edit_descriptions"]) && !empty($_POST["edit_definitions"]) && !empty($_POST["edit"]) 
  )
  $edit = strip_tags($_POST["edit"]);
  
  $edit_descriptions = strip_tags($_POST["Des-$id"]);
  if($edit_descriptions==""){$_SESSION["error_none"]=["empty"];}
  $edit_definitions = strip_tags($_POST["Def-$id"]);
?>