<?php

namespace Stivi\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class StiviUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
