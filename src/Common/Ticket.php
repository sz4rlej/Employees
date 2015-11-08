<?php
/**
 * Created by PhpStorm.
 * User: keymic
 * Date: 09.11.15
 * Time: 00:09
 */

namespace Employees\Common;


class Ticket
{
    private $unit;
    private $ticketId;

    public function __construct($ticketId)
    {
        $this->ticketId = $ticketId;
    }

    public function getUnit()
    {
        return $this->unit;
    }
}