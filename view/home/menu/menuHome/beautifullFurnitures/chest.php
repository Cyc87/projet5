<?php $title = "Les jolies commodes"; ?>

<?php ob_start(); ?>

<?php require("view/home/menu//menuHome/menu.php"); ?>

<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Les jolies commodes</h2>
    <div class="container" style="text-align:center">

        <form action="index.php?action=chest" method="get">
            <?php
            foreach ($readChestProduct as $readChestProduct) {
                ?>
                <div class="image">
                    <img src="<?= $readChestProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />
                    <h4><?= $readChestProduct->descriptionProduct() ?></h4>
                </div>
            <?php
            }
            ?>
        </form>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>
<?php require("view/footer/footer.php"); ?>