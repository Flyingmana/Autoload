<?php

  require '../src/classfinder.php';
  require '../src/phpfilter.php';

  require '../../scanner/src/directoryscanner.php';
  require '../../scanner/src/includeexcludefilter.php';
  require '../../scanner/src/filesonlyfilter.php';


  $scanner = new \TheSeer\Tools\DirectoryScanner;
  $scanner->addInclude('*.php');

  $finder = new \TheSeer\Tools\ClassFinder;

  $rcount = $finder->parseMulti($scanner('../'));
  $rclasses = $finder->getClasses();
  var_dump($rcount,$rclasses);
