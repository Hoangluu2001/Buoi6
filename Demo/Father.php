<?php
include_once ('grandfather.php');
class Father extends grandfather
{
    public $sing;
    public function __construct($age)
    {
        parent::__construct($age);

    }

}
