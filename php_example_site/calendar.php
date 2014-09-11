<?php $title = 'Home';
require_once 'templates/header.php';
$month = (empty($_GET['month'])) ? date("n", time()) : $_GET['month'];
$year = (empty($_GET['year'])) ? date("Y", time()) : $_GET['year'];
if($month < 1){
    $year--;
    $month = 12;
} elseif($month > 12){
    $year++;
    $month = 1;
}
$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$first = date("N", mktime(0,0,0, $month, 1, $year));
$total = ceil(($first + $days) / 7.0) * 7;
$day = 1;
?>
<div class="row cal-head">
    <div class="large-3 medium-3 small-3 columns cal-prev">
        <a class="button small radius" href="<?=$_SERVER['PHP_SELF'];?>?month=<?=$month-1;?>&year=<?=$year;?>">&lt;&lt;&lt;</a>
    </div>
    <h2 class="large-6 medium-6 small-6 columns subheader text-center"><?= date("F", mktime(0,0,0,$month)); ?>, <?= $year; ?></h2>

    <div class="large-3 medium-3 small-3 columns cal-next">
        <a class="button small radius" href="<?=$_SERVER['PHP_SELF'];?>?month=<?=$month+1;?>&year=<?=$year;?>">&gt;&gt;&gt;</a>
    </div>
</div>

<table class="calendar row">
    <tr>
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
    </tr>
    <tr>
<?php
    for($i=1;$i<=$total;$i++){
        if($i > $first && $day <= $days){?>
            <td><?=$day;?></td>
<?php
            $day++;
        } else {?>
            <td>&nbsp;</td>
<?php   }
        if($i%7==0){?>
        </tr>
        <tr>
<?php   }
    }
?>
    </tr>
</table>
<div class="row">
</div>
<?php require_once 'templates/footer.php';?>