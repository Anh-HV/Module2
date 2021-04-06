<?php
class Fan
{
  public const SLOW = 1;
  public const MEDIUM = 2;
  public const FAST = 3;
  private int $speed = self::SLOW;
  private bool $on = false;
  private float $radius = 5;
  private string $color = 'blue';


  public function getSpeed()
  {
    return $this->speed;
  }

  /**
   * Set the value of speed
   *
   * @return  self
   */
  public function setSpeed($speed)
  {
    $this->speed = $speed;

    return $this;
  }

  /**
   * Get the value of on
   */
  public function getOn()
  {
    return $this->on;
  }

  /**
   * Set the value of on
   *
   * @return  self
   */
  public function setOn($on)
  {
    $this->on = $on;

    return $this;
  }

  /**
   * Get the value of radius
   */
  public function getRadius()
  {
    return $this->radius;
  }

  /**
   * Set the value of radius
   *
   * @return  self
   */
  public function setRadius($radius)
  {
    $this->radius = $radius;

    return $this;
  }

  /**
   * Get the value of color
   */
  public function getColor()
  {
    return $this->color;
  }

  /**
   * Set the value of color
   *
   * @return  self
   */
  public function setColor($color)
  {
    $this->color = $color;

    return $this;
  }

  public function toString()
  {
    if ($this->on) {
      echo "Speed: $this->speed, Color: $this->color, Radius: $this->radius, Fan is on <br>";
    } else {
      echo "Color: $this->color, Radius: $this->radius, Fan is off <br>";
    }
  }
}

$fan1 = new Fan();
$fan2 = new Fan();

$fan1->setSpeed(Fan::FAST);
$fan1->setRadius(10);
$fan1->setColor('yellow');
$fan1->setOn(true);
$fan1->toString();

$fan2->setSpeed(Fan::MEDIUM);
$fan2->setRadius(5);
$fan2->setColor('blue');
$fan2->setOn(false);
$fan2->toString();