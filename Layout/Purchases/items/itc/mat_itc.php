<?php 
    foreach($pros_mat_log as $pro_mat_log): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="#"><?= $pro_mat_log["id_code_mat_log"]?></a></th>
        <td><?= $pro_mat_log["Descriptions"]?></td>
        <!-- FROM -->
        <td><?php if($pro_mat_log["germany"]==1){echo"Germany";}else{echo"Mada";}?></td>
        <!-- QUANTITY -->
        <td><?= $pro_mat_log["stock"];?></td>
        <!-- NEEDED -->
        <?php $qt_needed = $pro_mat_log["quantity_avarage"] - $pro_mat_log["stock"];?>
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_mat_log["id_log"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_mat_log["id_log"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>  
    </tr>
<?php 
    endforeach;
?> 