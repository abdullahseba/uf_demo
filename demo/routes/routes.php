<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */

$app->group('/account', function () {


    $this->post('/forgot-password', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->post('/register', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->post('/resend-verification', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->post('/set-password', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->post('/settings', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage')
        ->add('authGuard')
        ->setName('settings');

    $this->post('/settings/profile', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage')
        ->add('authGuard');
});
