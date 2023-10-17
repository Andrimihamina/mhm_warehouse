
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_sublocation))
    {
?>
    <option value= "<?php echo $row ['id_sub_loc']?>">
    <?php echo $row ['sublocation_descriptions'] ?>
    </option>
<?php
   }
?>