<?php

namespace Saving\BoxBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SavingBoxBundle extends Bundle
{
    public function getParent()
    {
        return 'SonataAdminBundle';
    }
}
