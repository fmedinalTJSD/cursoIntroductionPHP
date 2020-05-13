<?php

class Job{
    public $title;
    public $description;
    public $visible;
    public $months;
    public $period;

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
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
$job3->setTitle("Devops");
$job3->description = "This is description of Devops.";
$job3->period = "1/2015 - 10/2016";
$job3->visible = true;
$job3->months = 4;

$jobs = [
    $job1,
    $job2,
    $job3
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
  
  function getPeriod($months){
    $years = floor( $months / 12);
    $extraMonths = $months % 12;
    if ($years > 0){ return "$years years $extraMonths months"; }
    else {  return "$extraMonths monthns"; }
  }

  function printJob($job){

    if ($job->visible == false ){
      return;
    }

    echo '<li class="work-position">';
    echo '  <h5>' . $job->title . '</h5>';
    echo '  <p>' . $job->description . '</p>';
    echo '  <p> Period: ' . $job->period . '</p>';
    echo '  <p> Duration: ' . getPeriod($job->months) . '</p>';
    echo '  <strong>Achievements:</strong>';
    echo '  <ul>';
    echo '    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '  </ul>';
    echo '</li>';
  }