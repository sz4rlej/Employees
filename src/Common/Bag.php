<?php
namespace Employees\Common;

class Bag
{
    public function getContent($type)
    {
        return new Food($type);
    }
}
