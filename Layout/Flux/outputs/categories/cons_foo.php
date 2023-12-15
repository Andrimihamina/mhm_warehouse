<?php require_once("../../php/functions/services_responsibility/services_responsibility_cons_foo.php");?>
<?php foreach($prods as $prod):?>
    <tr>
    <td><?=$prod["id_code_cons_foo"]?></td>
    <td><?=$prod["brand_cons_foo"]?></td>
    <td><?=$prod["Descriptions"]?></td>
    <td><?=$prod["stock"]?></td>
    <td><input name="cos_foo_qt-<?= $prod["id_cons_foo"]?>" type="number" class="form-control" style="width: 106px"></td>
    <!-- EDIT -->
    <td><button type="submit" name="cos_foo_done-<?= $prod["id_cons_foo"]?>" value ="done" class="btn btn-info"><i class="bi bi-check-circle"></i></button></td>
    </tr>
<?php endforeach; ?>