<?php

namespace PI\userBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PIuserBundle extends Bundle
{
    public function getParent()

 {

 return 'FOSUserBundle';

 }
}


