<?php
namespace Employees\Common;

class Food
{
  private $temperature;
  
    public function isWarm()
    {
      return ($temperature > 36.5) ? true : false;
    }
  
    public function getFromBackpack()
    {
      return $this;
    }
    
    
}
