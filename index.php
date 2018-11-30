<?php
abstract class Automobil
{
public function move(){
return 'Merge Inainte';
    }
public function rotateLeft(){
return 'Roteste La Stinga';
    }
public function rotateRight(){
return 'Roteste La Dreapta';
    }

}


class Car extends Automobil {

public $name = 'Masina';
public function start()
    {
return $this->name.' '. 'Porneste';
    }
public function stop()
    {
return $this->name.' '. 'Stop';
    }
public function move($x)
    {
return $this->name . ' ' . parent::move() .' '.$x;
    }

public function rotateRight()
    {
return $this->name . ' ' . parent::rotateRight();
    }
public function rotateLeft()
    {
return $this->name . ' ' . parent::rotateLeft();
    }

}


$car = new Car();
echo $car->start();
?><hr><?
echo $car->move(10);
?><hr><?
echo $car->rotateRight();
?><hr><?
echo $car->move(25);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(22);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(26);
?><hr><?
echo $car->rotateRight();
?><hr><?
echo $car->move(30);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(30);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(26);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(75);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(41);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(27);
?><hr><?
echo $car->rotateRight();
?><hr><?
echo $car->move(18);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(101);
?><hr><?
echo $car->stop();