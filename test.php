<?php
include 'CircleComparator.php';

$c1=new Circle('circleOne',6);
$c2=new Circle('circleTwo',4);
$circleComparator=new CircleComparator($c1,$c2);
var_dump($circleComparator->compare($c1,$c2));