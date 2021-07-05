<?php
//The in_array() function searches an array for a specific value.
//
//Note: If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive

function testSearchInArr($arr ,$elem){
    if(in_array($elem, $arr)){
        print_r("element is in arry");
        //array_push add arr element at the end of arry
    }else{
        array_push( $arr,$elem);
        echo "in arr was added {$elem} \n";
        print_r($arr);
    }
    return $arr;
}
//testSearchInArr([1,4,5,7,8,9,2], 4);
