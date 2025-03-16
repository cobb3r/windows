<main>
<?php $uri = service('uri');$dateArray = ($uri->getSegments());?>
<table class="table table-bordered vh-100">
<thead>
    <tr id="monthHeader">
        <th colspan="7" id="header" class="text-center"><?= date('M') ?></th>
    </tr>
    <tr class="text-center" id="weekHeader">
      <th class="headerDay">Mon</th>
      <th class="headerDay">Tues</th>
      <th class="headerDay">Wed</th>
      <th class="headerDay">Thur</th>
      <th class="headerDay">Fri</th>
      <th class="headerDay">Sat</th>
      <th class="headerDay">Sun</th>
    </tr>
</thead>
<tbody>
    <?php for($x=1; $x <= cal_days_in_month(CAL_GREGORIAN, date("n"), date("Y")); $x++) {
        if ($x == 1 || $x == 8 || $x == 15 || $x == 22 || $x == 29) { ?>
            <tr>
        <?php } ?>
        <td class="dayCon"><p class="day"><?= $x ?></p><button class="dayBut"><a href="/availability/<?= $dateArray[1]?>/<?= $x ?>/<?= date("m")?>/<?= date("Y")?>" style="text-decoration: none; color: black">View Availability</a></button></td>
        <?php if ($x == 7 || $x == 14 || $x == 21 || $x == 28 || $x == 31) { ?>
            </tr>
        <?php } ?>
    <?php } ?>    
  </tbody>
</table>

<script>
    let day = new Date();
    let DoW = day.getDate();

    for (let x = 0; x < 31; x++) {
        let y = document.getElementsByClassName("day")[x]
        let z = document.getElementsByClassName("dayCon")[x]
        let w = document.getElementsByClassName("dayBut")[x]
        if (y.innerHTML < DoW) {
            z.style.backgroundColor = 'grey'
            w.style.display = 'none'
        }
    }
</script>
</main>
