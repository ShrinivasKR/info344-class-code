<?php
$randomNum = rand(1 , 100);
echo "Your new random value is $randomNum\n\n";

for ($m = 1; $m <= 12; $m++) {
    $months[$m] = date('F', mktime(0,0,0,$m));
}

foreach ($months as $month) {
    echo "$month\n";
}

echo "\n";

sort($months, SORT_STRING);   

foreach ($months as $month) {
    echo "$month\n";
}

echo "\n";

?>