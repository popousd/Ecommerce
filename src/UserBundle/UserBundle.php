<?php

namespace UserBundle;

use FOS\UserBundle\FOSUserBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserBundle extends Bundle
{
    public function getParent(){

        return "FOSUserBundle";

    }
}
