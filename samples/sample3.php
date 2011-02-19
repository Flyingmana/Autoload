<?php

  require '../src/classfinder.php';
  require '../src/phpfilter.php';
  require '../src/autoloadbuilder.php';

  require '../../scanner/src/directoryscanner.php';
  require '../../scanner/src/includeexcludefilter.php';
  require '../../scanner/src/filesonlyfilter.php';

  $scanner = new \TheSeer\Tools\DirectoryScanner;
  $scanner->addInclude('*.php');

  $finder = new \TheSeer\Tools\ClassFinder;

  $finder->parseMulti($scanner('../'));

  $found = $finder->getClasses();

  $ab = new \TheSeer\Tools\AutoloadBuilder($found);

  echo $ab->render();
