<main>
<?php $uri = service('uri');$dateArray = ($uri->getSegments());?>
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
    <?php $shiftStart = strtotime("8:00:00"); $shiftEnd = $shiftStart; $timeTaken = (60 * ($jobs[($dateArray[1] - 1)]['time_needed']));?>
    <?php for($x=1; $x <= (9 / $jobs[($dateArray[1] - 1)]['time_needed']); $x++) { ?>
        <tr>
            <?php $shiftStart = $shiftEnd; $shiftEnd = strtotime("+ $timeTaken Minutes", $shiftEnd); ?>
            <td class="shiftEnds"><?=date("H:i", $shiftStart)?> - <?=date("H:i", $shiftEnd)?></td>
            <td id="time<?= $x ?>"><button><a href="/bookNow/<?= $dateArray[1]?>/<?= $dateArray[4]?>-<?= $dateArray[3]?>-<?= $dateArray[2]?>/<?= date("H:i", $shiftStart) ?>" style="text-decoration: none; color:black">Book Now</a></button></td>
            <?php for($z=0; $z < count($bookings); $z++) {
                $bookedTaken = (60 * $jobs[$bookings[$z]['jobID'] -1]['time_needed']);
                if (date("H:i:s", $shiftStart) == $bookings[$z]['bookingTime'] || date("H:i", $shiftStart) < date("H:i", $newEnd)){ 
                    if (date("H:i:s", $shiftStart) == $bookings[$z]['bookingTime']) {
                        $newEnd = (strtotime("+ $bookedTaken Minutes", $shiftStart));
                    }?>
                    <script>
                        let bookedSlot<?=$x?> = document.getElementById("time<?= $x ?>")
                        bookedSlot<?=$x?>.innerHTML = "<p>Booked</p>";
                        bookedSlot<?=$x?>.style.backgroundColor = "red";
                    </script>
                <?php } 
            } ?>
        </tr>
    <?php } ?>
</tbody>
</table>
</main>