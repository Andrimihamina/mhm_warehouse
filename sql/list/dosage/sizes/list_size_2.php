
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_sizes))
    {
?>
    <option value= "<?php echo $row ['id_sizes']?>">
    <?php echo $row ['sizes_descriptions'] ?>
    </option>
<?php
   }
?>