<?php

abstract class Vehicle {
    public $brand;

    public function __construct($brand) {
        $this->brand = $brand;
        echo $this->brand . " is alive <br>";
      }

      abstract static function makeNoise();
}

?>