<?php
/**
 * VBTM module for Craft CMS 3.x
 *
 * Utilities for VBTM
 *
 * @link      https://www.carolineboeykens.be
 * @copyright Copyright (c) 2019 Caroline Boeykens
 */

namespace modules\vbtm\services;

use modules\vbtm\VBTM;

use Craft;
use craft\base\Component;

/**
 * VBTMModuleService Service
 *
 * All of your module’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other modules can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Caroline Boeykens
 * @package   VBTMModule
 * @since     1.0.0
 */
class VBTMService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin/module file, call it like this:
     *
     *     VBTMModule::$instance->vBTMService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
