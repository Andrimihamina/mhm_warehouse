<?php
    $sql_fuel= "SELECT * FROM fuel";
    $fuels = $db->query($sql_fuel);
    $fuels= $fuels->fetchAll();
?>