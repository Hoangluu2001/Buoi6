<?php
include_once ('Father.php');
class Sonny extends Father
{
    public function __construct($age)
    {
        parent::__construct($age);

    }
    public function sing()
    {
        return parent::sing(); // TODO: Change the autogenerated stub
    }
}