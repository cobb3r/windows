<main id="mainContainer" class="row d-flex justify-content-center">
    <div class="col-12">
        <?php for ($x = 0; $x < 2; $x++) {?>
            <div class="row">
                <img src="/assets/img/<?= $jobs[$x]['title']; ?>.jpg">
            </div>
        <?php } ?>
    </div>
</main>