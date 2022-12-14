<?php
/*
CALCULATE AGE OF PERSON IN DAYS AND YEARS.
*/
$bdate = '2002-07-20';
$today = date('Y-m-d');
$diff = strtotime($today) - strtotime($bdate);
$no = $diff / (60 * 60 * 24);
$no2 = $diff / (60 * 60 * 24*365);
//60 sec in 1 min ,60 min in 1 hr , 24 hr in 1 day.
echo "THERE ARE $no DAYS SINCE $bdate. ";
echo "THERE ARE $no2 YEARS SINCE $bdate.";
?>
