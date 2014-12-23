<?php

namespace Employees\Morele;

use Employees\Common\Human;

class Przemololo extends Human
{
    public function say($comment)
    {
        return $comment . ' - mówię Ci to ja!';
    }
}
