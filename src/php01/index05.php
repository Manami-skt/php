<?php
for ($i = 1; $i <=5; $i++){
    echo $i * 2 . '<br />';
}
echo "<br />";

$count = 0;
while($count < 20) {
    echo ++$count . '<br />';
}

// 解答例
$count = 0;
while ($count < 20) {
  $count += 1;
  echo $count . '<br />';
}
// 解答例

echo "<br />";

$count1 = 0;
while ($count1 <= 100){
    if ($count1 === 20){
        break;
    }
    if ($count1  % 3 === 0){
        $count1++;
        continue;
    }
    echo $count1 . '<br />';
    $count1++;
}

$num =0;
do {
    echo "num = " . $num . '<br />';
    $num += 1;
}
while ($num < 3);


// for ($number = 1; $number <=50; $number++){
//     echo $number +=1 . "<br />";{
//         if ($number % 3 ===0){
//             echo "Fizz" . "<br />";
//         }
//         if ($number % 5 ===0){
//             echo "Buzz" . "<br />";
//         }
//         if ($number % 3 ===0 , $number % 5 ===0){
//             echo "FizzBuzz" . "<br />";
//         }
//     }
// }

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizBuzz";

for ($i = 1; $i <=50; $i++) {
    if ($i % 15 == 0){
        echo $FizzBuzz . "<br />";
    }
    else if ($i % 3 == 0){
        echo $Fizz . "<br />";
    }
    else if ($i % 5 == 0){
        echo $Buzz . "<br />";
    }
    else {
        echo $i . "<br />";
    }
}

for ($i = 1; $i < 6; $i++){
    for ($j = 1; $j < 6; $j++){
        echo "⚫︎";
    }
    echo "<br />";
}