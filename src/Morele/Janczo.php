<?php

namespace Employees\Morele;

use Employees\Common\Human;

class Janczo extends Human
{
    public function refactor()
    {
        $this->say('Kurwa, jak można było tak to spierdolić?!?!');

        while (!codeIsClean()) {
            //doRefactor();
            $this->say('Kurwa');
        }
    }

    public function getRandomResponse()
    {
        $this->say('Nie da się...');
    }

    public function merge()
    {
        $methodCaller = getCaller(); //TOOD:

        if ($methodCaller == 'Monia') {
            $this->say('Nie będę nic merdżował');
        }

        //TODO: merdżowanie
    }

    public function work()
    {
        sleep(1800);

        $browser = new Firefox();
//        $browser->openCard('https://pl-pl.facebook.com/'); // Deprecated
        $browser->openCard('http://www.wykop.pl/');

        sleep(1800);
    }
}
