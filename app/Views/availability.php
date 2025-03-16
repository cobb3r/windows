<main>
<?php

 $uri = service('uri');$dateArray = ($uri->getSegments());?>
<table class="table table-bordered vh-100">
<thead>
    <tr id="availableHeader">
        <th colspan="1" id="header" class="text-center">Pick an Appointment</th>
        <th colspan="1" id="jobFrom" class="text-center">
        <form id="form">
            <label for="pickJob">Choose The Service You Require</label>
            <select id="pickJob" name="pickJob">
                <?php for ($x = 0; $x < count($jobs); $x++) { ?>
                    <option name="<?= $x ?>" id="<?= $x ?>" value="<?= $x ?>"><?= $jobs[$x]['title']; ?></option>
                <?php } ?>
            </select>
        </form>
        </th>
    </tr>
</thead>
<tbody>
</tbody>
    <?php $newTime = strtotime("8:00:00"); $timeSlot = $newTime; $timeTaken = (60 * ($jobs[($dateArray[1] - 1)]['time_needed']));?>
    <?php for($x=1; $x <= (9 / $jobs[($dateArray[1] - 1)]['time_needed']); $x++) { ?>
        <tr>
            <?php $newTime = $timeSlot; $timeSlot = strtotime("+ $timeTaken Minutes", $timeSlot); ?>
            <td class="timeSlots"><?=date("H:i", $newTime)?> - <?=date("H:i", $timeSlot)?></td>
            <?php if (date("H:i:s", $newTime) == $bookings['0']['bookingTime']) { ?>
                <td style="background-color: red;"><p>Fully Booked</p></td>
            <?php } else { ?>
                <td><button><a>Book Now</a></button></td>
            <?php } ?>
        <tr>
    <?php } ?>
</table>
</main>