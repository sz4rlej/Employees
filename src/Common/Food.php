<?php
namespace Employees\Common;

class Food
{
    private $type = null;
    public $temperature = 0;

    /**
     * @param string $type Type of eaten food - ex. soup, sandwich, yogurt
     * @param null|int $temperature Temperature of food
     */
    public function __construct($type = 'unknown', $temperature = null)
    {
        $this->temperature = ($temperature === null) ? rand(5, 25) : $temperature;

        $this->type = (string)$type;
    }

    /**
     * Check food is ready for eat
     *
     * @return bool
     */
    public function isReadyForEat()
    {
        return ($this->temperature >= 63) ? true : false;
    }

    /**
     * Get food from backpack
     * @return object $this - Food object
     * @throws \Exception
     */
    public function getFromBackpack()
    {
        if ($this->type === null) {
            throw new Exceptions\NoFoodException();
        }

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
