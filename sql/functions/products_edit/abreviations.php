<?php

$NBR_abrev = mysqli_query($dbc,"SELECT * FROM `$tables` WHERE `$coluns` ='$abreviations'");

$NBR_abreviations=mysqli_num_rows($NBR_abrev);

?>