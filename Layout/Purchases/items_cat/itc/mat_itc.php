<?php 
    foreach($pros_mat_log as $pro_mat_log): 
?>
    <tr>   
        <!-- SUPPLIERS-->
        <th scope="row"><a href="#"><?= $pro_mat_log["suppliers"]?></a></th>
        <td><?= $pro_mat_log["Descriptions"]?></td>
        <td><?= $pro_mat_log["Price"]?></td>
        <td><?= $pro_mat_log["Expiration_date"]?></td>
        
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_mat_log["id_log"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_mat_log["id_log"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>  
    </tr>
<?php 
    endforeach;
?> 