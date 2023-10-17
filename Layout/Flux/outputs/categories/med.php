<?php require_once("../../php/functions/services_responsibility/services_responsibility_medicine.php");?>
<?php foreach($prods as $prod):?>
    <tr>
    <td><?=$prod["id_code_med"]?></td>
    <td><?=$prod["commercial_name"]?></td>
    <td><?=$prod["Descriptions"]?></td>
    <td><?=$prod["stock"]?></td>
    <td><input name="med_med_qt-<?= $prod["id_med"]?>" type="number" class="form-control" style="width: 106px"></td>
    <!-- EDIT -->
    <td><button type="submit" name="med_med_done-<?= $prod["id_med"]?>" value ="done" class="btn btn-info"><i class="ri-edit-box-line"></i></button></td>
    </tr> 
<?php endforeach; ?> 