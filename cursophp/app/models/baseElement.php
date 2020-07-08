<?php

namespace App\Models;

class BaseElement  implements Printable{
    private $title;
    public $description;
    public $visible;
    public $months;
    public $period;

    public function __construct($title, $description, $visible, $months, $period){
      $this->setTitle($title);
      $this->description = $description;
      $this->period = $period;
      $this->visible = $visible;
      $this->months = $period;
    }

    public function setTitle($title){
      if($title ==""){
        $this->title = "N/A";
      }else{
        $this->title = $title;
      }
    }

    public function getTitle(){
        return $this->title;
    }

    public function getPeriodAsString(){
      $years = floor( $this->months / 12);
      $extraMonths =  $this->months % 12;
      if ($years > 0){ return "$years years $extraMonths months"; }
      else {  return "$extraMonths monthns"; }
    }
    

    public function getDescription(){
      return $this->description;
  }
  
}