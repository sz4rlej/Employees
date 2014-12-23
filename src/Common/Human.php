<?php

namespace Employees\Common;


class Human
{
    protected function moveRightHand($direction)
    {
        return false;
    }

    protected function mouthDo($what)
    {
        switch ($what) {

            default:
                return false;
                break;

            case 'laugh':
                echo 'he he';
                break;
        }
    }
    
    protected function eat($something)
    {
        return true;
    }    

} 
