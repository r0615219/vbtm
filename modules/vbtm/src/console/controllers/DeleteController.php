<?php

namespace modules\vbtm\console\controllers;

use craft\elements\Entry;
use craft\feedme\Plugin;
use craft\feedme\queue\jobs\FeedImport;

use Craft;
use yii\console\Controller;

class DeleteController extends Controller
{
    public function actionWedstrijden() {
        $wedstrijden = Entry::find()->section('wedstrijden')->anyStatus()->all();

        foreach ($wedstrijden as $wedstrijd) {
            echo "Deleted " . $wedstrijd->title . "\n";
            Craft::$app->elements->deleteElement($wedstrijd);
        }
        return;
    }
}
