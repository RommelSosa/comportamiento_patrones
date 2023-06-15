<?php
// Online PHP compiler to run PHP program online
// Print "Hello World!" message
// Interfaz del visitante
interface ShapeVisitor {
    public function visitCircle(Circle $circle);
    public function visitRectangle(Rectangle $rectangle);
}

// Clase abstracta que representa una forma geométrica
abstract class Shape {
    abstract public function accept(ShapeVisitor $visitor);
}

// Clase que representa un círculo
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function accept(ShapeVisitor $visitor) {
        $visitor->visitCircle($this);
    }

    public function getRadius() {
        return $this->radius;
    }
}

// Clase que representa un rectángulo
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function accept(ShapeVisitor $visitor) {
        $visitor->visitRectangle($this);
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }
}

// Clase concreta de visitante que calcula el área de las formas
class AreaVisitor implements ShapeVisitor {
    private $area = 0;

    public function visitCircle(Circle $circle) {
        $radius = $circle->getRadius();
        $this->area += pi() * $radius * $radius;
    }

    public function visitRectangle(Rectangle $rectangle) {
        $width = $rectangle->getWidth();
        $height = $rectangle->getHeight();
        $this->area += $width * $height;
    }

    public function getArea() {
        return $this->area;
    }
}

// Ejemplo de uso
$shapes = [
    new Circle(5),
    new Rectangle(4, 6),
    new Circle(3)
];

$areaVisitor = new AreaVisitor();

foreach ($shapes as $shape) {
    $shape->accept($areaVisitor);
}

echo "El área total de las formas es: " . $areaVisitor->getArea();

