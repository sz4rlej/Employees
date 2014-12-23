<?php

namespace Common\Morele;

use Common\Human;

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

    public function getUsualResponse()
    {
        echo "wydupcaj";
    }

    public function getStandardResponse()
    {
        echo "uhmmm";
    }

    public function drunkAnswer()
    {
        $this->moveRightHand('up');
        $this->moveRightHand('down');
        $this->moveRightHand('up');
        $this->moveRightHand('down');
        $this->moveRightHand('up');
        $this->moveRightHand('down');
        $this->getUsualResponse();
    }

}