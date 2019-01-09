<?php
$arr = [1, 1, 1, 2, 3, 3, 4, 5, 1, 6, 1, 3];

function isRepeat($arr, $item)
{
    $count = 0;
    $i = 0;
    foreach ($arr as $value) {
        if (isset($arr[$i])) {
            if ($arr[$i] == $item) {
                $count++;
            }
        }
        $i++;
    }
    if ($count > 1) {
        return true; //item is repeat more then once
    } else {
        return false; //item no-repeat
    }
}

$n = 0;
foreach ($arr as $item) {

    if (!isRepeat($arr, $item)) {
        unset($arr[$n]);
    }
    $n++;
}

print_r($arr);

?>