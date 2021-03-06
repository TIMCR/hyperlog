<?php
/**
 * ownCloud - hyperlog
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Constantin Kraft <constantin@websolutions.koeln>
 * @copyright Constantin Kraft 2017
 */

/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\Application\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */

namespace OCA\HyperLog\AppInfo;

(new Application())->registerRoutes($this, ['routes' => [
    [
        'name' => 'Settings#updateLogFileName',
        'url' => '/ajax/updateLogFileName',
        'verb' => 'POST'
    ],
    [
        'name' => 'Settings#getHookStates',
        'url' => '/ajax/getHookStates',
        'verb' => 'GET'
    ],
    [
        'name' => 'Settings#setHookStatus',
        'url' => '/ajax/setHookStatus',
        'verb' => 'POST'
    ],
]]);
