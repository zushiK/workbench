<?php


spreadOperator([1,2,3],[2,3,4]);

function spreadOperator(array ...$array) : array
{
  var_dump($array);

  return [];
}

/*
引数 (array ...$array) (array $array)

(array ...$array) 
array(3) {
  [0]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
  [1]=>
  array(2) {
    [0]=>
    int(2)
    [1]=>
    int(3)
  }
  [2]=>
  array(1) {
    [0]=>
    int(4)
  }
}

(array $array)
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
*/