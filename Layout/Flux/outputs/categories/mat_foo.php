<?php require_once("../../php/functions/services_responsibility/services_responsibility_mat_foo.php");?>
<?php foreach($prods as $prod):?>
    <tr>
    <td><?=$prod["id_code_mat_foo"]?></td>
    <td><?=$prod["manufacturer_name"]?></td>
    <td><?=$prod["Descriptions"]?></td>
    <td><?=$prod["stock"]?></td>
    <td><input name="mat_foo_qt-<?= $prod["id_mat_foo"]?>" type="number" class="form-control" style="width: 106px"></td>
    <!-- EDIT -->
    <td><button type="submit" name="mat_foo_done-<?= $prod["id_mat_foo"]?>" value ="done" class="btn btn-info"><i class="ri-edit-box-line"></i></button></td>
    </tr>
<?php endforeach; ?>