
<!-- TABLES -->
<?php foreach($edits as $edit): ?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><?= $edit["$id"]?></th>
        <td><?= $edit["$brands"]?></td>
        <td><?= $edit["$Descriptions"]?></td>
        <!-- QUANTITY -->
        <td><?= $edit["$stock"];?></td>
        <td><input name="<?=$qt?>-<?= $edit["$id_id"]?>" type="number" class="form-control" style="width: 106px"></td>
        <td><div class="input-group mb-2"><span class="input-group-text">Ar</span><input type="text" name="<?=$price?>-<?= $edit["$id_id"]?>" class="form-control" style="width: 106px" aria-label="Amount (to the nearest Ariary)"></div></td>
        <!-- EDIT -->
        <td><button type="submit" name="<?=$done?>-<?= $edit["$id_id"]?>" value ="done" class="btn btn-info"><i class="ri-edit-box-line"></i></button></td>
    <tr> 
<?php endforeach;?>  
