<?php
/**
 * VBTM module for Craft CMS 3.x
 *
 * Utilities for VBTM
 *
 * @link      https://www.carolineboeykens.be
 * @copyright Copyright (c) 2019 Caroline Boeykens
 */

namespace modules\vbtm\console\controllers;

use craft\feedme\Plugin;
use craft\feedme\queue\jobs\FeedImport;

use Craft;
use yii\console\Controller;

/**
 *
 * ./craft vbtm/import/run-import
 *
 * @author    Caroline Boeykens
 * @package   VBTM
 * @since     1.0.0
 */
class ImportController extends Controller
{
    public function actionRunImport() {
        $vbtm = Plugin::$plugin->feeds->getFeedById(6);
        Craft::$app->getQueue()->delay(0)->push(new FeedImport([
            'feed' => $vbtm,
            'limit' => 0,
            'offset' => 0,
        ]));

        // Geen D6 meer sinds 2020
        /*$d6 = Plugin::$plugin->feeds->getFeedById(7);
        Craft::$app->getQueue()->delay(0)->push(new FeedImport([
            'feed' => $d6,
            'limit' => 0,
            'offset' => 0,
        ]));*/

        $mikst = Plugin::$plugin->feeds->getFeedById(8);
        Craft::$app->getQueue()->delay(0)->push(new FeedImport([
            'feed' => $mikst,
            'limit' => 0,
            'offset' => 0,
        ]));

        Craft::$app->queue->run();

        return;
    }
}
