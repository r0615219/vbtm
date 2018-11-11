<?php

namespace modules\jsonmodule\services;

use modules\jsonmodule\JsonModule;

use Craft;
use craft\base\Component;
use yii\helpers\Json;

/**
 *
 */
class FacebookEventsService extends Component
{
    public function getEvents()
    {
        $settings = JsonModule::$instance->getSettings();
        define("APPID", $settings['facebookAppId']);
        define("SECRET", $settings['facebookSecret']);
        define("PAGE", $settings['facebookPage']);


        //page id = 392040357479158
        //access token = EAAGkzolS2ecBAId1RNss9CJexXmZBMzS2g1oOeBuKoHA484mHisMnDBajalDEM5yLD5S2p1NF3YS1OBrye5TbqLMgvqlPJivP0qmu4OK4I9pYMrTleAiQkDq1l0jeza6NQ9I7ky9FoRMdr3bHfgwyyYgRTfLa3l3zMW34bwZDZD

        // Get events list from Facebook API
        $fb = new \Facebook\Facebook([
            'app_id' => APPID,
            'app_secret' => SECRET,
            'default_graph_version' => 'v3.2',
        ]);

        $response = $fb->get(
            '/392040357479158/events?time_filter=upcoming', //
            'EAAGkzolS2ecBAId1RNss9CJexXmZBMzS2g1oOeBuKoHA484mHisMnDBajalDEM5yLD5S2p1NF3YS1OBrye5TbqLMgvqlPJivP0qmu4OK4I9pYMrTleAiQkDq1l0jeza6NQ9I7ky9FoRMdr3bHfgwyyYgRTfLa3l3zMW34bwZDZD'
        )->getDecodedBody();

        return $response;
    }
}