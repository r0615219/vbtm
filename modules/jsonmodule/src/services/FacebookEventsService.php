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
  public function getEvents(){

      $sintId = '181990676042242';

    $settings = JsonModule::$instance->getSettings();
    define("APPID", $settings['facebookAppId']);
    define("SECRET", $settings['facebookSecret']);
    define("PAGE", $settings['facebookPage']);



    // Get events list from Facebook API
    $fb = new \Facebook\Facebook([
      'app_id' => APPID,
      'app_secret' => SECRET,
      'default_graph_version' => 'v3.0',
      'default_access_token' => '462681950837223|BYVRwP5fR51lPXN5xcdmgag3sKk',
      'user_access_token' => 'EAAGkzolS2ecBADZCdQ56KoKC8iKxA0hFImYXNidw2u5VK3nmEp7zgkiKaLcfFTHIFO2mIzXsKZCMY6NZCL0pV54fx77liYZAnjMh7Hgy6fTaH1uowgGMjDIxNgTy0AYqfSpsCtO6aI7h5WaTZCVqNYZAixZANfylKYxu1PZCGBHdoxcLOBakh3pK1THclezm3cwZD',
      'client_token' => '3fb505b453ad363a4c02d7a0b256700e',
    ]);

      /*try {
          // Returns a `FacebookFacebookResponse` object
          $response = $fb->get(
              '/181990676042242',
              '462681950837223|BYVRwP5fR51lPXN5xcdmgag3sKk'
          );
      } catch(FacebookExceptionsFacebookResponseException $e) {
          echo 'Graph returned an error: ' . $e->getMessage();
          exit;
      } catch(FacebookExceptionsFacebookSDKException $e) {
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
          exit;
      }*/

      $response = $fb->get('https://graph.facebook.com/'.PAGE.'/events?time_filter=upcoming')->getDecodedBody();
      dd($response);
      $graphNode = $response->getGraphNode();

      //$fb->get('/'.PAGE.'/events?time_filter=upcoming')->getDecodedBody();
      //$response = $fb->request('GET','/'.PAGE.'/events?time_filter=upcoming');
      /*$response = $fb->get(
          '/VBTMachelen/events', //?time_filter=upcoming',
          '462681950837223|BYVRwP5fR51lPXN5xcdmgag3sKk'
      )->getDecodedBody();

      dd($response);

    $graphNode = $response->getGraphNode();
    dd($graphNode);
    return $response;*/
  }
}