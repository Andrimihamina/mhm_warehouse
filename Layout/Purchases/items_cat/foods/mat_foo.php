<?php 
    foreach($pros_mat_foo as $pro_mat_foo): 
?>
    <tr>   
        <!-- SUPPLIERS-->
        <th scope="row"><a href="#"><?= $pro_mat_foo["suppliers"]?></a></th>
        <td><?= $pro_mat_foo["Descriptions"]?></td>
        <td><?= $pro_mat_foo["Price"]?></td>
        <td><?= $pro_mat_foo["Expiration_date"]?></td>
        
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_mat_foo["id_foo"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_mat_foo["id_foo"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>  
    </tr>
<?php 
    endforeach;
?> 