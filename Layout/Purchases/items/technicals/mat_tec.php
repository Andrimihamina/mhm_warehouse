<?php 
    foreach($pros_mat_tec as $pro_mat_tec): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="#"><?= $pro_mat_tec["id_code_mat_tec"]?></a></th>
        <td><?= $pro_mat_tec["Descriptions"]?></td>
        <!-- FROM -->
        <td><?php if($pro_mat_tec["germany"]==1){echo"Germany";}else{echo"Mada";}?></td>
        <!-- QUANTITY -->
        <td><?= $pro_mat_tec["stock"];?></td>
        <!-- NEEDED -->
        <?php $qt_needed = $pro_mat_tec["quantity_avarage"] - $pro_mat_tec["stock"];?>
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_mat_tec["id_tec"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_mat_tec["id_tec"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>  
    </tr>
<?php 
    endforeach;
?> 