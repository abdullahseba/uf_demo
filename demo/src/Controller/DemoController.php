<?php

/**
* Demo controller
*
* @author Abdullah Seba
* @link example.comn
*
* @version 1.0.0
*
*/

namespace UserFrosting\Sprinkle\Demo\Controller;

use UserFrosting\Sprinkle\Core\Controller\SimpleController;
use UserFrosting\Sprinkle\Scheduler\Controller\TaskController;
use UserFrosting\Support\Exception\ForbiddenException;


/**
 * DemoController Class
 */
class DemoController extends SimpleController
{
    //Test Page
    public function demoMessage($request, $response, $args)
    {
    $this->ci->alerts->addMessageTranslated('danger', 'Sorry, this feture has been disabled in the demo.');
    }
}
