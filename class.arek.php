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
    
    public function getCodeInfoResponse()
	{
		echo "nie wiem jak to działa a sam pisałem ten kod";
		$this->mouthDo('laugh');
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
