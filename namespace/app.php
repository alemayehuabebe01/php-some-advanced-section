<?php
namespace App;

use Helper\Display as HelperDisplay;

class Display {
    public function info() {
        echo "this is the namespace demonstration code from app.php";
    }
}

// Instantiate the HelperDisplay class
$helperDisplay = new HelperDisplay();
$helperDisplay->info();