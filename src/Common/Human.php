<?php

namespace Employees\Common;


class Human
{
    protected function moveRightHand($direction)
    {
        return 'Hand was moved to: ' . $direction;
    }

    protected function mouthDo($what)
    {
        switch ($what) {
            case 'laugh':
                return 'he he';

            default:
                return false;
        }
    }

    protected function eat($something)
    {
        return $something . 'is has been eaten';
    }

    public function dayAfter() {
        return 'The sun shines too loud...';
    }

} 
