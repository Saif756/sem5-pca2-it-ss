<?php
function isBouncy($num){
    echo "From a f ", $num;
}
function isSpecial($num){
    $tempNum = $num;
    $sumOfDigits = 0;
    $productOfDigits = 1;
    while ($num>0) {
        $rem = $num%10;
        // echo "rem ", $rem, "<br>";
        $sumOfDigits = $sumOfDigits + $rem;
        $productOfDigits = $productOfDigits * $rem;
        $num = (int)($num/10);
    }
    $total = $sumOfDigits + $productOfDigits;
    // echo "sum ", $sumOfDigits, "<br>";
    // echo "pro ", $productOfDigits, "<br>";
    // echo "tot ", $total, "<br>";
    if ($tempNum == $total) {
        return "True";
    } else {
        return "False";
    }
    
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