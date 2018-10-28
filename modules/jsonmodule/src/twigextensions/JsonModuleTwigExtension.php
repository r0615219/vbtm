<?php
/**
 * Json module for Craft CMS 3.x
 *
 * Json Decode
 *
 * @link      http://carolineboeykens.be
 * @copyright Copyright (c) 2018 Caroline Boeykens
 */

namespace modules\jsonmodule\twigextensions;

use modules\jsonmodule\JsonModule;

use Craft;

/**
 * @author    Caroline Boeykens
 * @package   JsonModule
 * @since     1.0.0
 */
class JsonModuleTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'JsonModule';
    }
}
