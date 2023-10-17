<?php 
    foreach($pros_mat_imo as $pro_mat_imo): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="#"><?= $pro_mat_imo["id_code_mat_imo"]?></a></th>
        <td><?= $pro_mat_imo["Descriptions"]?></td>
        <!-- FROM -->
        <td><?php if($pro_mat_imo["germany"]==1){echo"Germany";}else{echo"Mada";}?></td>
        <!-- QUANTITY -->
        <td><?= $pro_mat_imo["stock"];?></td>
        <!-- NEEDED -->
        <?php $qt_needed = $pro_mat_imo["quantity_avarage"] - $pro_mat_imo["stock"];?>
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_mat_imo["id_imo"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_mat_imo["id_imo"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>  
    </tr>
<?php 
    endforeach;
?> 