<?php

include 'Circle.php';
include 'Comparator.php';
class CircleComparator implements Comparator
{
public function compare($circleOne, $cirlceTwo){
    $radiusOne=$circleOne->getRadius();
    $radiusTwo=$cirlceTwo->getRadius();

    if ($radiusOne>$radiusTwo){
        return 1;
    }elseif ($radiusOne<$radiusTwo){
        return -1;
    }else{
        return 0;
    }
}
}