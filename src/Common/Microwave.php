<?php
namespace Employees\Common;

class Microwave
{
    private $content;
    private $lockDoor;
    private $time;
    private $temperature;
    private $forbiddenFood = array('egg', 'yogurt');

    public function putIn(Food $content)
    {
        if (in_array($content->getType(), $this->forbiddenFood)) {
            throw new \ForbiddenFoodTypeException($content->getType());
        }

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

    public function lockDoor($state = true)
    {
        $this->lockDoor = $state;
    }

    private function _beep()
    {
        echo 'MICROWAVE: BEEP!!!' . "\n";
    }

    public function run()
    {
        $this->lockDoor();

        $finishTime = new \DateTime();
        $finishTime->add(new \DateInterval($this->time));

        while (new \DateTime() < $finishTime) {
            sleep(2);

            $this->content->temperature += ($this->temperature / 200);

            if ($this->content->temperature > 300) {
                throw new Exceptions\KaboomException('FIRE!!!');
            }
        }

        $this->_beep();

        $this->lockDoor(false);

        return true;
    }
}
