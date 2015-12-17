<?php
/**
 * Created by PhpStorm.
 * User: keymic
 * Date: 09.11.15
 * Time: 00:03
 */


namespace Employees\Morele;

use Employees\Common\Human;
use Employees\Common\Ticket;
use Employees\Common\TestFail;

class Damian extends Human
{
    public function test($ticketId)
    {
        $ticket = new Ticket($ticketId);
        if (rand(0, 1) == 1 && $ticket->getUnit() == 'Frontend') {
            return '2 pixele w lewo';
        } else {
            return new TestFail();
        }
    }


}