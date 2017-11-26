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
    $this->delete('/u/{user_name}', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->post('', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->post('/u/{user_name}/password-reset', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->put('/u/{user_name}', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->put('/u/{user_name}/{field}', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');
})->add('authGuard');

/**
 * Routes for administrative role management.
 */
$app->group('/api/roles', function () {
    $this->delete('/r/{slug}', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->post('', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->put('/r/{slug}', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->put('/r/{slug}/{field}', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');
})->add('authGuard');

/**
 * Routes for administrative group management.
 */
$app->group('/api/groups', function () {
    $this->delete('/g/{slug}', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->post('', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');

    $this->put('/g/{slug}', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');
})->add('authGuard');

/**
 * Routes for administrative panel management.
 */
$app->group('/api/dashboard', function () {
    $this->post('/clear-cache', 'UserFrosting\Sprinkle\Demo\Controller\DemoController:demoMessage');
})->add('authGuard');
