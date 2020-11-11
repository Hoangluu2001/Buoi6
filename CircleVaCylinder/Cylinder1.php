<?php
include_once ('Circle1.php');
class Cylinder1 extends Circle1
{
    public $height;

    public function __construct($name, $radius,$color, $height)
    {
        parent::__construct($name, $radius,$color);
        $this->height = $height;
    }
    public function volume(){
        return parent::calculateArea()*$this->height;
    }

}