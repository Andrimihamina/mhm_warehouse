
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_application))
    {
?>
    <option value= "<?php echo $row ['id_appli']?>">
    <?php echo $row ['application_descriptions'] ?>
    </option>
<?php
   }
?>