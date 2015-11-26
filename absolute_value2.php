<?php

echo "数字を入力して下さい\n";
$num = fgets(STDIN,4096);
echo "------------------------\n";
echo "今、入力した数字の絶対値は「".abs($num)."」です\n";

