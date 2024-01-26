<?php 
    foreach($pros_mat_imo as $pro_mat_imo): 
?>
    <tr>   
        <!-- SUPPLIERS-->
        <th scope="row"><a href="#"><?= $pro_mat_imo["suppliers"]?></a></th>
        <td><?= $pro_mat_imo["Descriptions"]?></td>
        <td><?= $pro_mat_imo["Price"]?></td>
        <td><?= $pro_mat_imo["Expiration_date"]?></td>
        
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_mat_imo["id_imo"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_mat_imo["id_imo"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>  
    </tr>
<?php 
    endforeach;
?> 