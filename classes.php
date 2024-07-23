<?php
$height = 100;
$currentHeight = $height;

function bounceloop($currentHeight){
    while($currentHeight > 0.1){
        echo "height".($currentHeight)."<br>";
           $currentHeight = $currentHeight/2;

   
   }
}

bounceloop($height);

function arrayFunc() {
    $mixedArray = ["Ali", "Hassan", "Jawad", 3, 4, 88, 8, 55, 33, 23, 6, 0];

    $intArray = [];
    $stringArray = [];

    foreach ($mixedArray as $data) {
        if (is_string($data)) {
            $stringArray[] = $data;
        } else {
            $intArray[] = $data;
        }
    }

    Sortarr($intArray);

    echo "String Array: <br>";
    print_r($stringArray);
    echo "<br>";
    echo "Int Array: <br>";
    print_r($intArray);
}

function Sortarr(&$intArray) {
    $n = count($intArray);
    $swapped = true;

    while ($swapped) {
        $swapped = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($intArray[$i] > $intArray[$i + 1]) {
                $temp = $intArray[$i];
                $intArray[$i] = $intArray[$i + 1];
                $intArray[$i + 1] = $temp;
                $swapped = true;
            }
        }
        $n--;
    }
}

arrayFunc();




function MixedArray(){
    $arr = [6,4,55,65,45,34,24,6,2.5,3.2, "Jawad","Ali","Hassan"];
    $int = [];
    $string = [];

    foreach($arr as $mixed)

    if(is_string($mixed)){
        $string [] = $mixed;
    }
    else{
        $int [] = $mixed;
    }

    SortedArray($int);
    echo "String Array: <br>";
    print_r($string);
    echo "<br>";
    echo "SORTED Int Array: <br>";
    print_r($int);
}

function SortedArray(&$int){
    $n = count($int);
    $swapped = true;
    while($swapped){
        $swapped = false;
        for($i = 0; $i<$n-1 ; $i++){
           if ($int [$i] > $int [$i+1]){
                $temp = $int[$i];
                $int[$i] = $int[$i+1];
                $int[$i+1] = $temp;
                $swapped = true;
           }
        }
        $n--;
    }
}

MixedArray();
// SortedArray();



function mixedArrFunc(){
    $Mixed = ["Jawad","Ali","Hamza",5,4,77,86,79,4,3];
    $Integers = [];
    $Strings = [];

    foreach($Mixed as $Data){
        if(is_int($Data)){
            $Integers [] = $Data;
        }
        else{
            $Strings [] = $Data;
        }
    }

    sort($Integers);
    echo "<br>";
    echo "<br>";
    print_r($Integers);
    echo "<br>";
    print_r($Strings);
    echo "<br>";
}

mixedArrFunc();


function ballBounce($currentHeight){
    while($currentHeight > 0.1){
        echo "Height".($currentHeight)."<br>";
        $currentHeight = $currentHeight/2;
    }
}

ballBounce($currentHeight,$height)
?>
