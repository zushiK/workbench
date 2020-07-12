<?php 
// https://thk.kanzae.net/net/itc/t2379/
// 計測開始
$obj = new CompareSpeed();
$time_start = microtime(true);

$time = microtime(true) - $time_start;
echo $time . "秒";


class CompareSpeed
{
    public function inArrayFnc(){
        $array = [
            'apple',
            'orange',
            'melon',
            'banana'
        ];
    }
}


?>