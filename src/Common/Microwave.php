<?php
namespace Employees\Common;

class Microwave 
{
  private $content;
  private $time;
  private $temperature;
  
  public function putIn($content)
  {
    $this->content = $content;
  }
  
  public function setTime($time)
  {
    $this->time = $time;
  }
  
  public function setTemperature($temperature)
  {
    $this->temperature = $temperature;
  }
  
  public function run()
  {
    return true;
  }
}
