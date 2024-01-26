<?php 
    foreach($pros_mat_tec as $pro_mat_tec): 
?>
    <tr>   
        <!-- SUPPLIERS-->
        <th scope="row"><a href="#"><?= $pro_mat_tec["suppliers"]?></a></th>
        <td><?= $pro_mat_tec["Descriptions"]?></td>
        <td><?= $pro_mat_tec["Price"]?></td>
        <td><?= $pro_mat_tec["Expiration_date"]?></td>
        
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_mat_tec["id_tec"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_mat_tec["id_tec"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>  
    </tr>
<?php 
    endforeach;
?> 