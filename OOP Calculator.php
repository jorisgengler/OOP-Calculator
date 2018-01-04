<?php

class Calculator{
private $eerste;
private $tweede;
public function __construct($eerste,$tweede){
    $this->eerste=$eerste;
    $this->tweede=$tweede;
}
public function add(){
    return $this->eerste + $this->tweede;  //add First and Second
 }
public function multiply(){
    return $this->eerste * $this->tweede;   //Multiply First and Second
 }
public function subtract(){
    return $this->eerste - $this->tweede;   //subtract First and Second
 } 
public function division(){
    return $this->eerste / $this->tweede;   //Division First and Second
 } 
}
$myCalc = new Calculator(6,12);
echo "6+12= ";
echo $myCalc->add(); //Displays 18
echo "</br>";
echo "6x12= ";
echo $myCalc->multiply(); //Displays 72
echo "</br>";
echo "6-12= ";
echo $myCalc->subtract(); //Displays -6
echo "</br>";
echo "6/12= ";
echo $myCalc->division(); //Displays 0,5

?>