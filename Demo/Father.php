<?php
include_once ('grandfather.php');
class Father extends grandfather
{
    public function __construct($age)
    {
        parent::__construct($age);

    }
public function sing($sing){
        return "abc";
}
}
