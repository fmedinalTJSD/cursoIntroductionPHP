<?php

use App\Models\{Job, Project};

$jobs = Job::all();

/*
require_once "app/Models/Printable.php";

require_once "lib1/Project.php";

use App\Models\Job;
use App\Models\Project;
$job2 = new Job();
$job2->setTitle("Python Developer");
$job2->description = "This is description of Python Developer.";
$job2->period = "04/2018";

$job1 = new Job("PHP Developer","This is the description of PHP Developer",true,"10/2016 - 04/2018",10);
$job4 = new Job("Java Developer","This is the description of Java Developer",true,"1/2015 - 10/2016",3);
*/

$project1 = new Project("Project 1", "Description 1",true,'',0);

$projects = [
  $project1
];
  

  function printElement( $job){

    /*if ($job->visible == false ){
      return;
    }*/

    echo '<li class="work-position">';
    echo '  <h5>' . $job->title . '</h5>';
    echo '  <p>' . $job->description . '</p>';
    echo '  <p> Duration: ' . $job->getPeriodAsString() . '</p>';
    echo '  <strong>Achievements:</strong>';
    echo '  <ul>';
    echo '    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '  </ul>';
    echo '</li>';
  }