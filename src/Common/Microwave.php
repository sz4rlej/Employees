<?php
namespace Employees\Common;

class Microwave
{
    private $content;
    private $lockDoor;
    private $time;
    private $temperature;

    public function putIn(\Employees\Common\Food $content)
    {
        $forbiddenTypes = array('egg', 'yogurt');

        if (in_array($content->getType(), $forbiddenTypes)) {
            throw new \Exception('Forbidden food type: ' . $content->getType());
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

    public function lockDoor($state=true) {
        $this->lockDoor = $state;
    }

    public function run()
    {
        $this->lockDoor();

        $finishTime = new \DateTime('+' . $this->time);

        while (new \DateTime() < $finishTime) {
            sleep(1);
        }

        $this->lockDoor(false);

        return true;
    }
}
