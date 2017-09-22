<?php

namespace AgiBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AgiBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
