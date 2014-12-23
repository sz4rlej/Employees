<?php

namespace Employees\Morele;

use Employees\Common\Human;
use Employees\Common\Food;
use Employees\Common\Microwave;

class Arek extends Human
{
    public function getReprymend()
    {
        echo "Gupiśty, gupiśty, gupiśty!";
    }

    public function getAutoReprymend()
    {
        echo "Gupi ja, gupi ja, gupi ja!";
    }

    public function getRandomResponse()
    {
        echo "tak";
    }

    public function getStandardResponse()
    {
        if (time() % 2 == 0) {
            echo "wydupcaj";
        } else {
            echo "uhmmm";
        }
    }

    public function getCodeInfoResponse()
    {
        echo "nie wiem jak to działa a sam pisałem ten kod";
        $this->mouthDo('laugh');
    }

    public function microwaveFood()
    {
        $food = new Food('russian dumplings in aluminum foil');
        $food->getFromBackpack();

        $microwave = new Microwave();
        $microwave->putIn($food);

        do {
            $microwave->setTime("5m");
            $microwave->setTemperature(200);
            $microwave->run();
        } while (!$food->isWarm() || Przemololo::say("Weźże to kurwa odwiń z folii aluminiowej!"));

        $this->eat($food);
    }

    public function getDrunkAnswer()
    {
        $this->moveRightHand('up');
        $this->moveRightHand('down');
        $this->moveRightHand('up');
        $this->moveRightHand('down');
        $this->moveRightHand('up');
        $this->moveRightHand('down');
        $this->getStandardResponse();
    }

}
