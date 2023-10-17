<?php 
    foreach($pros_cons_log as $pro_cons_log): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="#"><?= $pro_cons_log["id_code_cons_log"]?></a></th>
        <td><?= $pro_cons_log["Descriptions"]?></td>
        <!-- FROM -->
        <td><?php if($pro_cons_log["germany"]==1){echo"Germany";}else{echo"Mada";}?></td>
        <!-- QUANTITY -->
        <td><?= $pro_cons_log["stock"];?></td>
        <!-- NEEDED -->
        <?php $qt_needed = $pro_cons_log["quantity_avarage"] - $pro_cons_log["stock"];?>
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_cons_log["id_log"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_cons_log["id_log"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>
    </tr>
<?php 
    endforeach;
?> 