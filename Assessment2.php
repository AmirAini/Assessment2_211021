<?php

//! Question 1

$store1=[];
$store2=[];
$store3=[];

//! 3 users  
for ($i=1; $i<=3; $i++){
    
    echo "this is user $i inputs ".'<br>';
    if ($i == 1){
        for ($a=1;$a<=5;$a++){
            $storeNum1 = (rand(5,20));
            echo "$storeNum1, ";
            array_push($store1,$storeNum1);
        }
        // echo ">=5 <br>";
    }

    echo '<br>';
    if ($i == 2){
        for ($b=1;$b<=5;$b++){
            $storeNum2 = (rand(0,5));
            echo "$storeNum2, ";
            array_push($store2,$storeNum2); //push into array
        }
        // echo "<=5 <br>";
    }

    echo '<br>';
    if ($i == 3){
        for ($c=1;$c<=5;$c++){
            $storeNum3 = (rand(10,20));
            echo "$storeNum3, ";
            array_push($store3,$storeNum3); //push into array
        }
        // echo "large <br>";
    }
}

//! display 3 largest numbers
echo '<br>';
echo '<br>';

//?Store 1
sort($store1)."<br>";

array_shift($store1); //once
array_shift($store1); //twice

// print_r($store1);

echo '<br>';
echo '<br>';

//?Store 2
sort($store2)."<br>";

array_shift($store2); //once
array_shift($store2); //twice

// print_r($store2);

echo '<br>';
echo '<br>';

//?Store 3
sort($store3)."<br>";

array_shift($store3); //once
array_shift($store3); //twice

// print_r($store3);

//? Finishing
echo '<br>';
echo '<br>';
echo "The 3 highest numbers from user 1 are ".implode(", ", $store1);

echo '<br>';
echo '<br>';
echo "The 3 highest numbers from user 2 are ".implode(", ", $store2);

echo '<br>';
echo '<br>';
echo "The 3 highest numbers from user 3 are ".implode(", ", $store3);

echo '<br>';
echo '<br>';

if ($store1[2] > $store3[2]){
    echo "The larger is from user 1 which is ".$store1[2];
} else {
    echo "The larger is from user 3 which is ".$store3[2];
}

?>

