<?php
echo "Namber\n";
$handle = fopen ("php://stdin","r");
$a = fgets($handle);
   for ($i=1; $i<=$a; $i++){  
if ($a % $i==0)      
  echo "$i \n";
}