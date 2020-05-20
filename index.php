<?php
include 'MyList.php';

$element = new MyList();

$element->add(3);
$element->add(4);
$element->add(10);
$element->add(8);
$element->add(15);
$element->add(1);
$arr = [20, 80, 31, 20, 8, 18];

echo($element->size());
echo('<br>');
echo('<br>');

var_dump($element);
echo('<br>');
echo('<br>');

var_dump($element->addAll($arr));
echo('<br>');
echo('<br>');

var_dump($element);
echo('<br>');
echo('<br>');

var_dump($element->indexOf(20));
echo('<br>');
echo('<br>');

$element->sort();
var_dump($element);
echo('<br>');
echo('<br>');

($element->remove(3));
var_dump ($element);
echo('<br>');
echo('<br>');

var_dump($element->clear());