
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_measurs))
    {
?>
    <option value= "<?php echo $row ['id_measurs']?>">
    <?php echo $row ['measurs_descriptions'] ?>
    </option>
<?php
   }
?>