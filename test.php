<?php

// assert(true);
// assert(false);

function sum_intersect(array $arr1, array $arr2): int
{
   $res = array_intersect($arr1, $arr2);
   $res = array_sum($res);
   return $res;
}
assert(sum_intersect([2, 5, 7], [1, 2, 5]));



function sum_n_elements(array $arr, int $n): int{
   $res = 0;
   for($i = 0; $i < $n; $i++) {
      $res += $arr[$i];
   }
   return $res;
}
assert(sum_n_elements([1, 2, 3, 4], 2) == 3);



function sum_of_pairs(array $arr): array
{
   $length = count($arr);
   $newArr = [];
   for($i = 1; $i < $length; $i = $i + 2) {
      $newArr[] = $arr[$i - 1] + $arr[$i];
   }
   return $newArr;
}
assert(sum_of_pairs([1, 2, 3, 4, 5, 6]) == [3, 7, 11]);