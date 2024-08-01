<?php  

trait Display{
    public function DisplayInfo($info){
       echo $info.PHP_EOL;
    }
}

trait SaveData{
    protected function saveData(string $message){
        echo $message.PHP_EOL;
    }
}


class Main {

    use Display;
    use SaveData;

    public function SendInfo($info){
       $this->DisplayInfo($info);
    }

    public function sendData(){
        $this->saveData("hello alexs how are u data is saved");
    }


    
}
(new Main)->DisplayInfo("This is from alex abebe just for demonstration the trait");
(new Main)->sendData();



