<?php
/**
 * VBTM module for Craft CMS 3.x
 *
 * Utilities for VBTM
 *
 * @link      https://www.carolineboeykens.be
 * @copyright Copyright (c) 2019 Caroline Boeykens
 */

namespace modules\vbtm\assetbundles\VBTM;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * VBTMModuleAsset AssetBundle
 *
 * AssetBundle represents a collection of asset files, such as CSS, JS, images.
 *
 * Each asset bundle has a unique name that globally identifies it among all asset bundles used in an application.
 * The name is the [fully qualified class name](http://php.net/manual/en/language.namespaces.rules.php)
 * of the class representing it.
 *
 * An asset bundle can depend on other asset bundles. When registering an asset bundle
 * with a view, all its dependent asset bundles will be automatically registered.
 *
 * http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 *
 * @author    Caroline Boeykens
 * @package   VBTMModule
 * @since     1.0.0
 */
class VBTMAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@modules/vbtm/assetbundles/vbtm/dist";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        $this->css = [
            'css/VBTM.css',
        ];

        parent::init();
    }
}
