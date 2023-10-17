<?php 
    foreach($pros_cons_med as $pro_cons_med): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="#"><?= $pro_cons_med["id_code_cons_med"]?></a></th>
        <td><?= $pro_cons_med["Descriptions"]?></td>
        <!-- FROM -->
        <td><?php if($pro_cons_med["germany"]==1){echo"Germany";}else{echo"Mada";}?></td>
        <!-- QUANTITY -->
        <td><?= $pro_cons_med["stock"];?></td>
        <!-- NEEDED -->
        <?php $qt_needed = $pro_cons_med["quantity_avarage"] - $pro_cons_med["stock"];?>
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_cons_med["id_med"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_cons_med["id_med"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>
    </tr>
<?php 
    endforeach;
?> 