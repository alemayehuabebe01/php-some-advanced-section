<?php  

abstract class Cars{

    protected $brands = "BMW";

    public function ShowCarModels(){
       return  $this->brands;
    }

    abstract public function hiddeData($brand);
}

class Bmw extends Cars{

    public function displayData(){
        echo $this->ShowCarModels();
    }

    public function hiddeData($brand){
        echo $brand;
    }
}

(new Bmw)->hiddeData("marchedis");