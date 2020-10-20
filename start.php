<?php
// start.php

include_once("Triangle.php");
include_once("Circle.php");

//////////////////////////////////////////////////////////////////////
function createTriangle($a, $b, $c, $hc) {
    try {
        $triangle  = new Triangle($a, $b, $c, $hc);
        $perimeter = $triangle->calculatePerimeter();
        $area      = $triangle->calculateArea();

        printf("p = %s\n", $perimeter);
        printf("a = %s\n", $area);
        print("\n\n");
    }

    // if something goes wrong (i.e. the params are incorrect)
    // notify the user about the error
    catch (Exception $e) {
        $errorMessage = $e->getMessage();
        print($errorMessage);    
    }
}

//////////////////////////////////////////////////////////////////////
function createCircle($r) {
    try {
        $circle    = new Circle($r);
        $perimeter = $circle->calculatePerimeter();
        $area      = $circle->calculateArea();

        printf("p = %s\n", $perimeter);
        printf("a = %s\n", $area);
        print("\n\n");
    }

    // if something goes wrong (i.e. the params are incorrect)
    // notify the user about the error
    catch (Exception $e) {
        $errorMessage = $e->getMessage();
        print($errorMessage);    
    }
}

//////////////////////////////////////////////////////////////////////
// NB! Run app
createTriangle(4, 3, 2, 2);
createCircle(4);

// incorrect params
createTriangle(2, 4, 0, 0);
createCircle(-3);