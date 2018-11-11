<?php
/**
 * Json module for Craft CMS 3.x
 *
 * Json Decode
 *
 * @link      http://carolineboeykens.be
 * @copyright Copyright (c) 2018 Caroline Boeykens
 */

namespace modules\jsonmodule\variables;

use modules\jsonmodule\JsonModule;
use \Datetime;

use Craft;
use modules\jsonmodule\services\FacebookEventsService;

/**
 * @author    Caroline Boeykens
 * @package   JsonModule
 * @since     1.0.0
 */
class JsonModuleVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null $optional
     * @return string
     */

    public function getEvents()
    {
        $data = JsonModule::$instance->FacebookEventsService->getEvents();
        return $data;
    }
}
