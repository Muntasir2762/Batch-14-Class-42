<?php

// class Parents{
//     public function flat(){
//         echo '2BHK Flat <br>';
//     }

//     public function car(){
//         echo 'Ferrari <br>';
//     }
// }

// class Child extends Parents{
//     public function bike(){
//         echo 'R15-V3 <br>';
//     }
// }

// $child = new Child();
// $child->bike();
// $child->flat();
// $child->car();


// class Calculator1{
//     public function sum($num1, $num2){
//         $x = $num1;
//         $y = $num2;

//         return $x+$y;
//     }

//     public function sub($num1, $num2){
//         $x = $num1;
//         $y = $num2;

//         return $x-$y;
//     }
// }

// class Calculator2 extends Calculator1{
//     public function mul($num1, $num2){
//         $x = $num1;
//         $y = $num2;

//         return $x*$y;
//     }

//     public function div($num1, $num2){
//         $x = $num1;
//         $y = $num2;

//         return $x/$y;
//     }
// }

// $calculator2 = new Calculator2();
// echo $calculator2->mul(20, 5).'<br>';


// echo $calculator2->sub(30, 20).'<br>';


class Test{

    public function __destruct(){
        echo 'This is destructor <br>';
    }

    public function __construct($num1, $num2){
        echo $num1 + $num2. '<br>';
    }

    public function show(){
        echo 'Hello World! <br>';
    }

    public function greetings(){
        echo 'Good Evening <br>';
    }
}

$object = new Test(30, 20);
$object->show();
$object->greetings();

?>