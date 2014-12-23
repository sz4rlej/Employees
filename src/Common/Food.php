<?php
namespace Employees\Common;

class Food
{
    private $type;
    private $temperature;

    /**
     * @param string $type Type of eaten food - ex. soup, sandwich, yogurt
     */
    public function __construct($type = 'unknown')
    {
        $this->type = (string)$type;
    }

    /**
     * Check food is warm
     *
     * @return bool
     */
    public function isWarm()
    {
        $this->temperature = (double)(rand(0, 1000) / 10);
        return ($this->temperature > 36.5) ? true : false;
    }

    /**
     * Get food from backpack
     *
     * @return object $this - Food object
     */
    public function getFromBackpack()
    {
        return $this;
    }

    /**
     * Get food type
     *
     * @return string Type of food
     */
    public function getType()
    {
        return $this->type;
    }
}
