<?php
// -------do it with array ,string, string of words and integer ------

// 1 remove duplicates or get the unique in an array
// 2 count unique number
// 3 max number
// 4 reverse an array
// 5 reverse a string and integer
// 6 factorial
// 7 palindrome with string and number also
// 8 sum of array
// 9 there are two array put one element from one array and other next. Do this to the end
// 10 sorting of array in asc , desc
// 11 combining two arrays
// 12 making a table of two
// 13 making stars - right and one equilateral
// 14 even/odd
// 15 fibonacci number

// $arr = [1,5,5,2];
// $str = 'level';
// $int = 12345;

$arr1 = [1,2,3,4];
$arr2 = [5,6];

$len1= count($arr1);
$len2 = count($arr2);

$len3 = ($len1 > $len2) ? $len1 : $len2;


for($i = 0; $i < $len3; $i++){
    if(isset($arr1[$i])){
        $new [] = $arr1[$i];
    }

    if(isset($arr2[$i])){
        $new[]= $arr2[$i];
    }
}

print_r(implode(',',$new));

?>