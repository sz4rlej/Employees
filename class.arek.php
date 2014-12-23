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

    public function getStandardResponse()
    {
        if( time() % 2 == 0 )
        {
            echo "wydupcaj";
        }
        else
        {
            echo "uhmmm";
        }
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