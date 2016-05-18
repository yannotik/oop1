<?php

abstract class Figure{
    public $color;
    public $borderColor;
    public $position = "absolute" ;
    public $width;
    public $height;
    public $top;
    public $left;

    public function setColor($c){
        $this->color = $c;
    }

    public function setBorderColor($b){
        $this->borderColor = $b;
    }

    public function setPosition($p){
        $this->position = $p;
    }

    public function setWidth($w){
        $this->width = $w;
    }

    public function setHeight($h){
        $this->height = $h;
    }

    public function setLeft($l){
        $this->left = $l;
    }

    public function setTop($t){
        $this->top = $t;
    }

    public function display(){}


}
class Rectangle extends Figure
{
    public function display(){
       echo "<div class='test' style='width:" . $this->width . "px;
                    height:" . $this->height . "px;
                    background-color: " . $this->color . ";
                    border: 2px solid " . $this->borderColor . ";
                    position: ". $this->position . ";
                    left: ". $this->left . "px;
                    top: ". $this->top . "px;' >";

        echo "</div>";
    }
}

class Square extends Rectangle
{

    public function display(){
        if($this->width === $this->height){
            parent::display();
        } else{
            echo "это не квадрат!<br>";
        }
    }

}


class Oval extends Figure
{
    public $borderRadius;

    public function setBorderRadius($br){
        $this->borderRadius = $br;
    }

    public function display(){
       echo "<div class='test' style='width:" . $this->width . "px;
                        height:" . $this->height . "px;
                        background-color: " . $this->color . ";
                        border: 2px solid " . $this->borderColor . ";
                        position: ". $this->position . ";
                        left: ". $this->left . "px;
                        top: ". $this->top . "px; 
                        border-radius:" . $this->borderRadius . "px;' >";
        echo "</div>";
    }
}

class Circle extends Oval
{
 
    public function display(){
        if($this->width === $this->height && $this->borderRadius > 99){
            parent::display();
        } else{
            echo "это не круг! <br>";
        }
    }
}


$square = new Square();
$square->setWidth(100);
$square->setHeight(100);
$square->setColor("red");
$square->setBorderColor("yellow");
$square->setPosition("fixed");
$square->setLeft(100);
$square->setTop(100);
$square->display();

$cirlce = new Circle();
$cirlce->setWidth(100);
$cirlce->setHeight(100);
$cirlce->setColor("yellow");
$cirlce->setBorderColor("black");
$cirlce->setLeft(100);
$cirlce->setTop(250);
$cirlce->setBorderRadius(101);
$cirlce->display();

$rectangle = new Rectangle();
$rectangle->setWidth(70);
$rectangle->setHeight(100);
$rectangle->setColor("blue");
$rectangle->setBorderColor("red");
$rectangle->setLeft(100);
$rectangle->setTop(370);
$rectangle->display();

$oval = new Oval();
$oval->setWidth(200);
$oval->setHeight(100);
$oval->setColor("red");
$oval->setBorderColor("blue");
$oval->setLeft(100);
$oval->setTop(500);
$oval->setBorderRadius(100);
$oval->display();


