<?php
/**
 * Json module for Craft CMS 3.x
 *
 * Json Decode
 *
 * @link      http://carolineboeykens.be
 * @copyright Copyright (c) 2018 Caroline Boeykens
 */

namespace modules\jsonmodule\assetbundles\JsonModule;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Caroline Boeykens
 * @package   JsonModule
 * @since     1.0.0
 */
class JsonModuleAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@modules/jsonmodule/assetbundles/jsonmodule/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/JsonModule.js',
        ];

        $this->css = [
            'css/JsonModule.css',
        ];

        parent::init();
    }
}
