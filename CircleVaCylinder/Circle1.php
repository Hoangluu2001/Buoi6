<?php
class Circle1{
    public $radius ;
    public $color;
   public $name;
   public function __construct($name,$radius,$color)
   {
       $this->color=$color;
       $this->name=$name;
       $this->radius=$radius;
   }

    public function getRadius(){
      return $this->radius;
   }
   public function setRadius($radius){
       $this->radius = $radius;
   }
   public function getColor(){
       return $this->color;
   }
   public function setColor($color){
       $this->color=$color;
   }
   public function getName(){
       return $this->name;

   }
   public function setName($name){
       $this->name=$name;
   }
    public function calculateArea(){
        return pi() * pow($this->radius,2);
    }
    public function toString(){
       return 'radius  :'. $this->radius .'color  :'. $this->color;
    }

}