<?php
$randomNum = rand(1 , 100);
echo "Your new random value is $randomNum\n\n";

for ($m = 1; $m <= 12; $m++) {
    $months[$m] = date('F', mktime(0,0,0,$m));
}

function displayMonths($months) {
    foreach ($months as $month) {
        echo "$month\n";
    }  
    echo "\n";
}

displayMonths($months);

sort($months, SORT_STRING);   

displayMonths($months);

?>