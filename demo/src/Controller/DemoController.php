<?php

/**
* Demo controller
*
* @author Abdullah Seba
* UserFrosting (http://www.userfrosting.com)
*
* @link      https://github.com/userfrosting/UserFrosting
* @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
*/

namespace UserFrosting\Sprinkle\Demo\Controller;

use UserFrosting\Sprinkle\Core\Controller\SimpleController;

/**
* DemoController Class
*/
class DemoController extends SimpleController
{
    //Demo message
    public function demoMessage($request, $response, $args)
    {
        //Send message
        $this->ci->alerts->addMessageTranslated('danger', $this->ci->translator->translate('DEMO_MESSAGE'));
    }
}
