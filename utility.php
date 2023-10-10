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

function isPerfect($num){
    $sumOfDivisor = 0;

    for ($i=1; $i<$num; $i++) {
        if ($num % $i == 0) {
        $sumOfDivisor += $i;
        }
    }
    
    if ($num == $sumOfDivisor){
        return "True";
    } else {
        return "False";
    }
}

function reverseNum($num){
    $reverseNum=0;
    
    while($num>0){
        $rem = $num%10;
        $reverseNum = $rem + ($reverseNum*10);
        $num = (int)($num/10);
    }
    return $reverseNum;
    // echo $reverseNum;
}

function isAdam($num){
    //   echo "num ", $num, "\n";
        $squareOfNum = $num * $num;
        // echo "squareOfNum ", $squareOfNum, "\n";
        $reverseNum = reverseNum($num);
        // echo "reverseNum ", $reverseNum, "\n";
        $squareOfRevNum = $reverseNum * $reverseNum;
        // echo "squareOfRevNum ", $squareOfRevNum, "\n";
        
        $reverseOfSqRev = reverseNum($squareOfRevNum);
        // echo "reverseOfSqRev ", $reverseOfSqRev, "\n";
        if ($squareOfNum == $reverseOfSqRev){
          return "True";
        } else {
          return "False";
        }
    }


function sumOfDigits($num){
    $sumOfDigits = 0;
    while ($num>0) {
        $rem = $num%10;
        $sumOfDigits = $sumOfDigits + $rem;
        $num = (int)($num/10);
    }
    return $sumOfDigits;
}

function isNiven($num){
// 	$num = 28;
    echo "num ", $num, "\n";
    $sumOfNum = sumOfDigits($num);
    echo "sumOfNum ", $sumOfNum, "\n";
    
    if ($num%$sumOfNum == 0){
        return "True";
    } else {
        return "False";
    }
}

function isLead($num){
// 	$num = 28;
    // echo "num ", $num, "\n";
    $sumOfEvenNums = 0;
    $sumOfOddNums = 0;
    
    while ($num>0) {
        $rem = $num%10;
        if ($rem%2==0) {
        $sumOfEvenNums = $sumOfEvenNums + $rem;
        } else {
        $sumOfOddNums = $sumOfOddNums + $rem;
        }
        
        $num = (int)($num/10);
    }
    
    
    // echo "sumOfEvenNums ", $sumOfEvenNums, "\n";
    // echo "sumOfOddNums ", $sumOfOddNums, "\n";
    
    if ($sumOfEvenNums == $sumOfOddNums){
        return "True";
    } else {
        return "False";
    }
}

function isEvil($num){
    // 	$num = 28;
    //   echo "num ", $num, "\n";
        $countOfOnes = 1;
        $binary = decbin($num);
        // echo "binary ", $binary, "\n";
        $binary = str_split($binary);
     
      foreach ($binary as $b) {
        if ($b == '1'){
          $countOfOnes = !($countOfOnes);
        } 
      }
    //   echo "countOfOnes ", gettype($countOfOnes), "\n";
      if ($countOfOnes == true) {
        return "True";
      } else {
        return "False";
      }
      
    //   return $countOfOnes;
}


function isPrime($num) {
    if ($num == 0 || $num == 1) {
        return "False";
    }
    for ($i=2; $i < $num; $i++) { 
        if ($num % $i == 0) {
            return "False";
        }
    }
    
    return "True";
}

function factorial($num){
   $factorial = 1;

   for ($i=1; $i <= $num; $i++) { 
    $factorial *= $i;
   }

   return $factorial;
}

function isStrong($num){
    $tempNum = $num;
    $sum = 0;

    while ($num>0) {
        $rem = $num%10;
        $sum += factorial($rem);        
        $num = (int)($num/10);
    }

    if ($tempNum == $sum){
        return "True";
    } else {
        return "False";
    }

}

function isPrimePalindrome($num){
    // echo "Prime", isPrime($num), "\n";
    // echo "Palindrom", isPalindrome($num), "\n";

    if (isPrime($num)=="True" && isPalindrome($num)=="True") {
        return "True";
    } else {
        return "False";
    }
}

function isAutomorphic($num){
    $sqr = $num * $num;

    while ($num>0) {
        $rem = $num%10;
        $remSqr = $sqr%10;

        if($rem != $remSqr){
            return "False";
        }
        
        $num = (int)($num/10);
        $sqr = (int)($sqr/10);
    }

    return "True";

}

?>