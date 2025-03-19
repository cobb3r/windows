<main class="row d-flex justify-content-center align-items-center">
    <?php $uri = service('uri');$dateArray = ($uri->getSegments()); ?>
    <div class="col-8">
        <form id="form" class="d-flex flex-column" action="/success/<?= $dateArray[1]?>/<?= $dateArray[2]?>/<?= $dateArray[3]?>" method="post">
            <label for="fName">First Name</label>
            <input type="text" name="fName">
            <label for="lName">Last Name</label>
            <input type="text" name="lName">
            <label for="email">Email Address</label>
            <input type="email" name="email">
            <div class="d-flex">
                <div class="d-flex flex-column" style="width: 100%;">
                    <label for="address">Address Line 1</label>
                    <input type="text" name="address">
                </div>
                <div class="d-flex flex-column"  style="width: 100%;">
                    <label for="postCode">Post Code</label>
                    <input type="text" name="postCode">
                </div>
            </div>
            <div>
                <p>Service: <?= $jobs[$dateArray[1] -1]['title'] ?></p>
                <p>Date: <?= $dateArray[2] ?></p>
                <p>Time: <?= $dateArray[3] ?></p>
            </div>
            <input type="submit">
        </form>
    </div>
</main>