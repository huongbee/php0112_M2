<?php

function KiemTraNamNhuan($year){
    if(($year%4==0 && $year%100 != 0) || $year%400==0){
        return true;
    }
    return false;
}

//2016 2020 2014
//

$v = KiemTraNamNhuan(2020);

$date  = getdate();
$month = 2;//$date['mon']; 
$year = 2016;$date['year'];
$d = cal_days_in_month(CAL_GREGORIAN,$month,$year);
//echo $d;

if(KiemTraNamNhuan($year)){
    echo "Năm $year là năm nhuận, và tháng $month năm $year có $d ngày";
}
else 
    echo "Năm $year không phải năm nhuận, và tháng $month năm $year có $d ngày";
?>