<?php

namespace Employees\Common;


class Human
{
    protected function moveRightHand($direction)
    {
        //TODO: do it
    }

    protected function mouthDo($what)
    {
        switch ($what) {
            case 'laugh':
                return $this->say('he he');

            default:
                return false;
        }
    }

    protected function eat($something)
    {
        //TODO: do it
    }

    public function dayAfter()
    {
        $this->say('The sun shines too loud...');
    }

    public function say($comment)
    {
        echo $comment;
    }
} 
