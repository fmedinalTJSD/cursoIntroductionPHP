<?php
require_once "BaseElement.php";
class Job extends BaseElement{

    public function __construct($title, $description, $visible, $months, $period){
        
        parent::__construct('Job:   '.$title, $description, $visible, $months, $period);
    }

    public function getPeriodAsString(){
        $years = floor( $this->months / 12);
        $extraMonths =  $this->months % 12;
        if ($years > 0){ return " Job duration : $years years $extraMonths months"; }
        else {  return " Job duration : $extraMonths monthns"; }
      }
}