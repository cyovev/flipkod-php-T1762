<?php
// Triangle.php

class Triangle {
    private $sideA;
    private $sideB;
    private $sideC;
    private $heightC;

    //////////////////////////////////////////////////////////////////////
    function __construct($a = NULL, $b = NULL, $c = NULL, $hc = NULL) {
        // if any of the parameters are missing, equal or less than zero,
        // they are incorrect
        $incorrectParams = (bool) (!($a > 0 && $b > 0 && $c > 0 && $hc > 0));

        // TODO: it would also be good to check the height against all sides
        // to make sure such a triangle can actually exist

        if ($incorrectParams) {
            $message = "Incorrect parameters: sides and height need to be greater than 0.\n"
                     . "Usage: new " . __CLASS__ . "(\$a, \$b, \$c, \$hc)\n\n";
            throw new Exception($message);
        }

        $this->sideA   = $a;
        $this->sideB   = $b;
        $this->sideC   = $c;
        
        $this->heightC = $hc;

        echo "Initializing new " . __CLASS__ . "($a, $b, $c, $hc)\n\n";
    }

    //////////////////////////////////////////////////////////////////////
    public function calculatePerimeter() {
        $perimeter = $this->sideA + $this->sideB + $this->sideC;
        return $perimeter;
    }

    //////////////////////////////////////////////////////////////////////
    public function calculateArea() {
        $area = $this->sideC * $this->heightC;
        return $area;
    }
}