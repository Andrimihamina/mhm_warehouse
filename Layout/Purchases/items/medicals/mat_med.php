<?php 
    foreach($pros_mat_med as $pro_mat_med): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="#"><?= $pro_mat_med["id_code_mat_med"]?></a></th>
        <td><?= $pro_mat_med["Descriptions"]?></td>
        <!-- FROM -->
        <td><?php if($pro_mat_med["germany"]==1){echo"Germany";}else{echo"Mada";}?></td>
        <!-- QUANTITY -->
        <td><?= $pro_mat_med["stock"];?></td>
        <!-- NEEDED -->
        <?php $qt_needed = $pro_mat_med["quantity_avarage"] - $pro_mat_med["stock"];?>
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_mat_med["id_med"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_mat_med["id_med"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>  
    </tr>
<?php 
    endforeach;
?> 