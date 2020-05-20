<?php

require "app/Models/Job.php";
require "app/Models/Project.php";
require_once "app/Models/Printable.php";
require_once "lib1/Project.php";

/*$job1 = new Job();
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
$job3->months = 4;*/

$job1 = new Job("PHP Developer","This is the description of PHP Developer",true,"10/2016 - 04/2018",10);
$job4 = new Job("Java Developer","This is the description of Java Developer",true,"1/2015 - 10/2016",3);

$project1 = new Project("Project 1", "Description 1",true,'',0);

$jobs = [
    $job1,
    /*$job2,
    $job3,*/
    $job4
  ];

$projects = [
  $project1
];
  

  function printElement(Printable $job){

    if ($job->visible == false ){
      return;
    }

    echo '<li class="work-position">';
    echo '  <h5>' . $job->getTitle() . '</h5>';
    echo '  <p>' . $job->getDescription() . '</p>';
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