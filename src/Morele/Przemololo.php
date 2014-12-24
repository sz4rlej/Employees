<?php

namespace Employees\Morele;

use Employees\Common\Human;

class Przemololo extends Human
{
    public function say($comment)
    {
        $comment = parent::say($comment);
        return $comment . ' - mówię Ci to ja!';
    }

    public function arekFoilRemove()
    {
        $this->say("Weźże to kurwa odwiń z folii aluminiowej!");

        throw new Exceptions\ArekRemoveFoilException();
    }
}
