<?php
echo "Fizz\n";
$handle = fopen ("php://stdin","r");
$fizz = fgets($handle);
echo "Buzz\n";
$handle = fopen ("php://stdin","r");
$buzz = fgets($handle);
echo "Program limitation \n";
$handle = fopen ("php://stdin","r");
$end = fgets($handle);
function fizzbuzz($val, $num, $str)
{
    return $val % $num == 0 ? $str : false;
}
function or_pl($a, $b)
{
    return $a ?: $b;
}
foreach (range(1, $end) as $i) {
echo or_pl(fizzbuzz($i, 15, 'FB'), or_pl(fizzbuzz($i, $fizz, 'F'), or_pl(fizzbuzz($i, $buzz, 'B'), $i)));
}