<?php

class Job{
    private $title;
    public $description;
    public $visible;
    public $months;
    public $period;

    public function __construct(){}

    public function __construct1($title, $description, $visible, $months, $period){
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
}

$job1 = new Job();
$job1->setTitle("PHP Developer");
$job1->description = "This is description of PHP Developer.";
$job1->period = "04/2018";
$job1->visible = true;
$job1->months = 10;

$job2 = new Job();
$job2->setTitle("Python Developer");
$job2->description = "This is description of Python Developer.";
$job2->period = "04/2018";
$job2->visible = true;
$job2->months = 10;

$job3 = new Job();
$job3->setTitle("");
$job3->description = "This is description of Devops.";
$job3->period = "1/2015 - 10/2016";
$job3->visible = true;
$job3->months = 4;

$job4 = new Job("Java Developer","This is the description of Java Developer",true,"1/2015 - 10/2016",3);

$jobs = [
    $job1,
    $job2,
    $job3,
    $job4
  ];
/*,
    [
      'title' => 'Devops',
      'description' => 'This is the description of Devops.',
      'period' => '1/2015 - 10/2016',
      'visible' => true,
      'months' => 4
    ],
    [
      'title' => 'Java Developer',
      'description' => 'This is the description of Devops.',
      'period' => '1/2015 - 10/2016',
      'visible' => true,
      'months' => 3
    ]*/
  

  function printJob($job){

    if ($job->visible == false ){
      return;
    }

    echo '<li class="work-position">';
    echo '  <h5>' . $job->getTitle() . '</h5>';
    echo '  <p>' . $job->description . '</p>';
    echo '  <p> Period: ' . $job->period . '</p>';
    echo '  <p> Duration: ' . $job->getPeriodAsString() . '</p>';
    echo '  <strong>Achievements:</strong>';
    echo '  <ul>';
    echo '    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '  </ul>';
    echo '</li>';
  }