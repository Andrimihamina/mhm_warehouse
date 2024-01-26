<?php 
    foreach($pros_cons_foo as $pro_cons_foo): 
?>
    <tr>   
        <!-- SUPPLIERS-->
        <th scope="row"><a href="#"><?= $pro_cons_foo["suppliers"]?></a></th>
        <td><?= $pro_cons_foo["Descriptions"]?></td>
        <td><?= $pro_cons_foo["Price"]?></td>
        <td><?= $pro_cons_foo["Expiration_date"]?></td>

        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_cons_foo["id_foo"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_cons_foo["id_foo"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>
    </tr>
<?php 
    endforeach;
?> 