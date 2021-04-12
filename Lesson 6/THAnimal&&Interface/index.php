<?php 
abstract class Animal{
    abstract protected function makeSound();
}
interface Edible{
    function howToEat();
}
abstract class Fruits implements Edible{

}
class Tiger extends Animal{
    function makeSound()
    {
        return "Grrrrrrrrrrrrrrr";
    }
}

class Chicken extends Animal implements Edible{
    function makeSound()
    {
        return "O o o o o o o";
    }
    function howToEat()
    {
        return "The chicken has no way out";
    }
}
class Orange extends Fruits{
    function howToEat(){
        return "Peel";
    }
}
class Apple extends Fruits{
    function howToEat(){
        return "Eat";
    }
}
$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '<br>';
}
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
       echo $animal->makeSound(). ' ';
       if ($animal instanceof Chicken) {
           echo $animal->howToEat(). ' ';
       }
}