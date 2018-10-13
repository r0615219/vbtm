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
    public function decode($team)
    {
        $result = '';
        $json = file_get_contents('https://www.volleyadmin2.be/services/rangschikking_xml.php?reeks=' . $team . '&Wedstrijd=Hoofd&format=json');
        $data = json_decode($json);
        foreach ($data as $element) {
            if ($element->Ploegnaam == 'VBT MACHELEN ') {
                $result = $element;
            }
        }
        if ($result != '') {
            return $result;
        } else {
            return null;
        }
    }

    public function next($team)
    {
        $result = '';
        $matches = [];
        $json = file_get_contents('https://www.volleyadmin2.be/services/wedstrijden_xml.php?reeks=' . $team . '&stamnummer=VB-0431&format=json');
        $data = json_decode($json);
        $current_date = new DateTime();
        if ($data != false) {
            foreach ($data as $match) {
                $matches[] = $match;
            }
        }
        $result = array_slice($matches, 0, 3);
        if ($result != '') {
            return $result;
        } else {
            return null;
        }
    }
}
