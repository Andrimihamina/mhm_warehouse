
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_subsublocation))
    {
?>
    <option value= "<?php echo $row ['id_subsubloc']?>">
    <?php echo $row ['subsublocation_descriptions'] ?>
    </option>
<?php
   }
?>