// https://developer.mozilla.org/ja/docs/Web/JavaScript/Guide/Grammar_and_types
const performance = require('perf_hooks').performance;

$loop_count = 1e6;
test1();


function test1(){
    let test = "1";
    const st_a = performance.now(); // 開始時間
        for (let index = 0; index < $loop_count; index++) {
            parseInt(test) === 1
        }
    const end_a = performance.now(); // 終了時間
    
    const st_b = performance.now(); // 開始時間
        for (let index = 0; index < $loop_count; index++) {
            test*1 === 1
        }
    const end_b = performance.now(); // 終了時間

    const st_c = performance.now(); // 開始時間
        for (let index = 0; index < $loop_count; index++) {
            test == 1
        }
    const end_c = performance.now(); // 終了時間

    console.log("a" , end_a - st_a); 
    console.log("b" , end_b - st_b); 
    console.log("c" , end_c - st_c); 
}