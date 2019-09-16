<?php $title = "Mes jolies recherches"; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>
<br /><br />
<section>
    <?php
    if (isset($_SESSION['message'])) {
        ?>
        <div class="alert alert-<?= $_SESSION['msg_type'] ?>" id="alertSearch">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>   
</section>
<section>
    <div class="container" id="containerSearch">
        <form method="post" action="index.php?action=search">
            <input name="search" class="form-control" type="text" placeholder="Recherche" aria-label="Search" autocomplete="off"><br>
            <input name="submitSearch" type="submit" value="Rechercher"><br><br><br />
        </form>
    </div>
</section>

<section>
    <div class="container" style="text-align:center">
        <form action="index.php?action=search" method="get">
            <?php
            if ($readSearchProduct) {
                foreach ($readSearchProduct as $readSearchProduct) {
                    ?>
                    <div class="image">
                        <img src="<?= $readSearchProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />
                        <h4><?= $readSearchProduct->descriptionProduct() ?></h4>
                    </div>
            <?php
                }
            }
            ?>
        </form>
    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>
<?php require("view/footer/footer.php"); ?>