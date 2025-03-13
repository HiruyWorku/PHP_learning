<?php

function BinarySearch($array, $target) {
    $start = 0;
    $end = count($array)-1;

    while ($start <= $end) {
        $middle = floor($start + $end) / 2; //floor is a function in php for rounding down
        if ($array[$middle] == $target) {
            return $middle;
        }
        else if ($array[$middle] > $target) {
            $end = $middle - 1 ;
        }
        else {
            $start = $middle + 1;
        }
    }
    return -1;
}
$array = array(1, 3, 5, 8, 10, 12, 99, 743, 989, 1000);
$target = 8;

$result = BinarySearch($array, $target);

if ($result != -1) {
    echo "Target found at index $result";
} else {
    echo "Target not found in the array";
}

//everything else i used in this post has already been talked about in previous posts,


//--------recursive implementation


function binarySearchRecursive($array2, $target, $low, $high) {
    if ($low > $high) {
        return -1; // Target not found
    }

    $mid = floor(($low + $high) / 2);

    if ($array2[$mid] == $target) {
        return $mid;
    } elseif ($array2[$mid] < $target) {
        return binarySearchRecursive($array2, $target, $mid + 1, $high);
    } else {
        return binarySearchRecursive($array2, $target, $low, $mid - 1);
    }
}

$array2 = array(2, 5, 8, 12, 16, 23, 38, 56, 72, 91);
$target = 23;

$result = binarySearchRecursive($array2, $target, 0, count($array) - 1);

if ($result != -1) {
    echo "Target found at index $result";
} else {
    echo "Target not found in the array";
}
