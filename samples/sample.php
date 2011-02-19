<?php

  require '../src/classfinder.php';

  $finder = new \TheSeer\Tools\ClassFinder;

  $rcount = $finder->parseFile('src/classfinder.php');
  $rclasses = $finder->getClasses();
  var_dump($rcount,$rclasses);
