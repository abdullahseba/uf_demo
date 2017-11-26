<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */

 /**
  * Routes for account.
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

/**
 * Routes for administrative user management.
 */
$app->group('/api/users', function () {
    $this->delete('/u/{user_name}', 'UserFrosting\Sprinkle\Demo\Controller\UserController:demoMessage');

    $this->get('', 'UserFrosting\Sprinkle\Demo\Controller\UserController:demoMessage');

    $this->get('/u/{user_name}', 'UserFrosting\Sprinkle\Demo\Controller\UserController:demoMessage');

    $this->get('/u/{user_name}/activities', 'UserFrosting\Sprinkle\Demo\Controller\UserController:demoMessage');

    $this->get('/u/{user_name}/roles', 'UserFrosting\Sprinkle\Demo\Controller\UserController:demoMessage');

    $this->get('/u/{user_name}/permissions', 'UserFrosting\Sprinkle\Demo\Controller\UserController:demoMessage');

    $this->post('', 'UserFrosting\Sprinkle\Demo\Controller\UserController:demoMessage');

    $this->post('/u/{user_name}/password-reset', 'UserFrosting\Sprinkle\Demo\Controller\UserController:demoMessage');

    $this->put('/u/{user_name}', 'UserFrosting\Sprinkle\Demo\Controller\UserController:demoMessage');

    $this->put('/u/{user_name}/{field}', 'UserFrosting\Sprinkle\Demo\Controller\UserController:demoMessage');
})->add('authGuard');
