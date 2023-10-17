<div class="card">
    <div class="card-body">
        <h5 class="card-title"><?= $_SESSION["pdf"]["id_out"];?></h5>

        <embed 
        src="../../../warehouse_img/img/flux/output/<?= $_SESSION["pdf"]["pdf_name"];?>" 
        width="800" 
        height="500" 
        type="application/pdf"
        />

        <div class="text-center">
            <a href="../../Layout/Flux/outputs_services.php">
                  <button type="submit" class="btn btn-primary">Outputs</button>
                <?php
                  // Supprime une variable
                    unset($_SESSION["pdf"]);
                ?>
            </a>
        </div>

    </div>

</div>