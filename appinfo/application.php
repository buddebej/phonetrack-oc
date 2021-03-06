<?php
/**
 * Nextcloud - phonetrack
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Julien Veyssier <eneiluj@posteo.net>
 * @copyright Julien Veyssier 2017
 */

namespace OCA\PhoneTrack\AppInfo;

use OCP\IContainer;

use OCP\AppFramework\App;
use OCP\AppFramework\IAppContainer;

use OCA\PhoneTrack\Controller\PageController;
use OCA\PhoneTrack\Controller\LogController;
use OCA\PhoneTrack\Controller\UtilsController;

/**
 * Class Application
 *
 * @package OCA\PhoneTrack\AppInfo
 */
class Application extends App {

    /**
     * Constructor
     *
     * @param array $urlParams
     */
    public function __construct(array $urlParams = []) {
        parent::__construct('phonetrack', $urlParams);

        $container = $this->getContainer();

        /**
         * Controllers
         */
        $container->registerService(
            'PageController', function (IAppContainer $c) {
                return new PageController(
                    $c->query('AppName'),
                    $c->query('Request'),
                    $c->query('UserId'),
                    $c->query('ServerContainer')->getUserFolder($c->query('UserId')),
                    $c->query('ServerContainer')->getConfig(),
                    $c->getServer()->getShareManager(),
                    $c->getServer()->getAppManager(),
                    $c->getServer()->getUserManager(),
                    $c->query('ServerContainer')->getLogger()
                );
            }
        );

        $container->registerService(
            'LogController', function (IAppContainer $c) {
                return new LogController(
                    $c->query('AppName'),
                    $c->query('Request'),
                    $c->query('UserId'),
                    $c->query('ServerContainer')->getUserFolder($c->query('UserId')),
                    $c->query('ServerContainer')->getConfig(),
                    $c->getServer()->getShareManager(),
                    $c->getServer()->getAppManager(),
                    $c->getServer()->getUserManager(),
                    $c->query('ServerContainer')->getL10N($c->query('AppName')),
                    $c->query('ServerContainer')->getLogger()
                );
            }
        );

        $container->registerService(
            'UtilsController', function (IAppContainer $c) {
                return new UtilsController(
                    $c->query('AppName'),
                    $c->query('Request'),
                    $c->query('UserId'),
                    //$c->getServer()->getUserFolder($c->query('UserId')),
                    //$c->query('OCP\IConfig'),
                    $c->query('ServerContainer')->getUserFolder($c->query('UserId')),
                    $c->query('ServerContainer')->getConfig(),
                    $c->getServer()->getAppManager()
                );
            }
        );

    }

}

