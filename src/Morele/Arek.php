<?php

namespace Employees\Morele;

use Employees\Common\Human;
use Employees\Common\Bag;
use Employees\Common\Microwave;

class Arek extends Human
{
    public function getReprymend()
    {
        $this->say('Gupiśty, gupiśty, gupiśty!');
    }

    public function getAutoReprymend()
    {
        $this->say('Gupi ja, gupi ja, gupi ja!');
    }

    public function getRandomResponse()
    {
        $this->say('tak');
    }

    public function getStandardResponse()
    {
        if (time() % 2 == 0) {
            $this->say('wydupcaj');
        } else {
            $this->say('uhmmm');
        }
    }

    public function getCodeInfoResponse()
    {
        $this->say('nie wiem jak to działa a sam pisałem ten kod');
        $this->mouthDo('laugh');
    }

    public function prepareFoodInMicrowave()
    {
        $heatingCounter = 0;

        $bag = new Bag();
        $food = $bag->getContent('russian dumplings in aluminum foil');

        $microwave = new Microwave();
        $microwave->putIn($food);

        while (!$food->isReadyForEat()) {
            if ($heatingCounter >= 5) {
                $przemololo = new Przemololo();
                $przemololo->arekFoilRemove();
            }

            $microwave->setTime('P0DT0H0M30S');
            $microwave->setTemperature(200);
            $microwave->run();

            ++$heatingCounter;
        }

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
