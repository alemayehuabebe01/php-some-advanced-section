<?php 

interface DisplayInterface{
    public function Displayi(array $data);
}

class DisplayData{
    public function Display(array $data){  
      echo "I am Doing Better : ".$data['name'];
    }
}

$display = new DisplayData();
$display->Display(['name'=>'Alemayehu']);