<?php
// Circle.php

class Circle {
    private $radius;

    //////////////////////////////////////////////////////////////////////
    function __construct($r = NULL) {
        // if any of the parameters are missing, equal or less than zero,
        // they are incorrect
        $incorrectParams = (bool) ($r <= 0);

        if ($incorrectParams) {
            $message = "Incorrect parameters: radius needs to be greater than 0.\n"
                     . "Usage: new " . __CLASS__ . "(\$r)\n\n";
            throw new Exception($message);
        }

        $this->radius = $r;

        echo "Initializing new " . __CLASS__ . "($r)\n\n";
    }

    //////////////////////////////////////////////////////////////////////
    public function calculatePerimeter() {
        $perimeter = pi() * $this->radius * 2;
        return $perimeter;
    }

    //////////////////////////////////////////////////////////////////////
    public function calculateArea() {
        $area = pi() * $this->radius**2; // power of two
        return $area;
    }
}