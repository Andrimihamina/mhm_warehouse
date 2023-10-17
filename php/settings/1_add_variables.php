<?php
if(isset($_POST["add_descriptions"], $_POST["add_definitions"], $_POST["add"])
/*==================== OBLIGATORY VARIABLE ====================*/
  && !empty($_POST["add_descriptions"]) && !empty($_POST["add_definitions"]) && !empty($_POST["add"]) 
  )
  $add = strip_tags($_POST["add"]);
  
  $add_descriptions = strip_tags($_POST["add_descriptions"]);
  if($add_descriptions==""){$_SESSION["error_none"]=["empty"];}
  $add_definitions = strip_tags($_POST["add_definitions"]);
?>