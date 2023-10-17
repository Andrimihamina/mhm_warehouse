<?php foreach($edits_med as $edit): ?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><?= $edit["id_code_med"]?></th>
        <td><?= $edit["commercial_name"]?></td>
        <td><?= $edit["Descriptions"]?></td>
        <!-- QUANTITY -->
        <td><?= $edit["stock"];?></td>
        <td><input name="med_med_qt-<?= $edit["id_med"]?>" type="number" class="form-control" style="width: 106px"></td>
        <td><div class="input-group mb-2"><span class="input-group-text">Ar</span><input type="text" name="med_med_pr-<?= $edit["id_med"]?>" class="form-control" style="width: 106px" aria-label="Amount (to the nearest Ariary)"></div></td>
        <!-- EDIT -->
        <td><button type="submit" name="med_med_done-<?= $edit["id_med"]?>" value ="done" class="btn btn-info"><i class="ri-edit-box-line"></i></button></td>
    </tr> 
<?php endforeach;?>