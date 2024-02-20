<?php 
class Shapes{
    protected $name = "shape";
    public function draw(){
        echo $this->name;
    }
}

class Rectangle extends Shapes{
    protected $name = "Rectangle";
}

class Triangle extends Shapes{
    protected $name = "Rectangle";
}

class Circle extends Shapes{
    //protected $name = "Rectangle";
    public function draw(){
        echo 'O';
    }
}

$shape = new Shapes();
$circle = new Circle();
var_dump($shape);
echo "<br>";
echo $shape->draw();
echo "<br>";
echo $circle->draw();
echo "<br>";
var_dump($circle instanceof Shapes);