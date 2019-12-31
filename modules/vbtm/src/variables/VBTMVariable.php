<?php
/**
 * VBTM module for Craft CMS 3.x
 *
 * Utilities for VBTM
 *
 * @link      https://www.carolineboeykens.be
 * @copyright Copyright (c) 2019 Caroline Boeykens
 */

namespace modules\vbtm\variables;

use modules\vbtm\VBTM;

use Craft;

/**
 * VBTM Variable
 *
 * Craft allows modules to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.vBTMModule }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Caroline Boeykens
 * @package   VBTMModule
 * @since     1.0.0
 */
class VBTMVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.vBTMModule.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.vBTMModule.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
