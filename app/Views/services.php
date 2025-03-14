<main id="mainContainer" class="row d-flex justify-content-center">
    <div class="col-12" style="height: 100vh; overflow-y:scroll">
        <?php for ($x = 0; $x < 3; $x++) {?>
            <div id="serviceRow" class="row">
                <div id="serviceImgCol" class="col-3">
                    <img src="/assets/img/<?= $jobs[$x]['title']; ?>.jpg" style="height: 100%;" width="100%">
                </div>
                <div id="serviceDescCol" class="col-7 d-flex align-items-center justify-content-center">
                    <p><?= $jobs[$x]['job_description']; ?></p>
                </div>
                <div id="bookNow" class="col-2 d-flex flex-column align-items-center justify-content-center">
                    <p>Time Taken: <?= $jobs[$x]['time_needed']; ?> Hours</p>
                    <button id="button<?= $x ?>"><a href="/booking" style="text-decoration: none; color: black">Book Now</a></button>
                </div>
            </div>
        <?php } ?>
    </div>
</main>