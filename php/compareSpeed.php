<?php 
// https://thk.kanzae.net/net/itc/t2379/
// 計測開始
$loop_count = 1e6;

// inarray_isset();
intval_cast();

function inarray_isset(){
    global $loop_count;
    $array = ["apple", "orange", 'melon', "banana"];

    $st_a = microtime(true);
    for ($i=0; $i < $loop_count; $i++) { 
        if(in_array( 'orange', $array ))
        {
            echo "true";
        }
    }
    $end_a = microtime(true);

    $st_b = microtime(true);
    for ($i=0; $i < $loop_count; $i++) { 
        for ($j=0; $j < count($array) ; $j++) { 
            $new_array[$array[$j]] = true;
        }
        if (isset( $array['orange'])){
            echo "true";
        }
    }
    $end_b = microtime(true);

    $st_c = microtime(true);
    for ($i=0; $i < $loop_count; $i++) { 
        for ($j=0; $j < count($array) ; $j++) { 
            if($array[$i] === 'orange'){
                echo "true";
            }
        }
    }
    $end_c = microtime(true);

    echo "\n";
    echo '処理aの処理時間:'.($end_a - $st_a)."秒<br>\n";
    echo '処理bの処理時間:'.($end_b - $st_b)."秒<br>\n";
    echo '処理cの処理時間:'.($end_c - $st_c)."秒<br>\n";
}

function intval_cast(){
    global $loop_count;
    $test = "11111";

    $st_a = microtime(true);
    for ($i=0; $i < $loop_count; $i++) {
        intval($test);
    }
    $end_a = microtime(true);
    
    $st_b = microtime(true);
    for ($i=0; $i < $loop_count; $i++) { 
        (int)$test;
    }
    $end_b = microtime(true);

    echo "\n";
    echo '処理aの処理時間:'.($end_a - $st_a)."秒<br>\n";
    echo '処理bの処理時間:'.($end_b - $st_b)."秒<br>\n";
}