<?php

namespace Esprit\socialproBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EspritsocialproBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
