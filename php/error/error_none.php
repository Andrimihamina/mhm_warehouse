<?php
    if(isset($_SESSION["error_none"])){
    foreach($_SESSION["error_none"] as $message){
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-octagon me-1"></i>
            <?=$message?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    }
    unset($_SESSION["error_none"]);
    }
?>