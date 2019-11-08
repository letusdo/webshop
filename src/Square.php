<?php
namespace Shapes;

class Square {
    static function area($side){
        $surface_area = $side * $side;

        echo "The squares surface area is $surface_area units\n";
    }
}