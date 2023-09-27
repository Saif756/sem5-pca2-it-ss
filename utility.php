<?php
function isBouncy($num){
    echo "From a f ", $num;
}
function isPalindrome($num){
    
    $reverseNum=0;
    $tempNum = $num;

    while($tempNum>0){
        $rem = $tempNum%10;
        $reverseNum = $rem + ($reverseNum*10);
        $tempNum = (int)($tempNum/10);
    }
    
    if ($reverseNum==$num) {
        return "True";
    } else{
        return "False";
    }
}

?>