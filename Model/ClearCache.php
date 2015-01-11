<?php
/**
 * ClearCache
 *
 * @category Model
 * @package  ClearCache
 * @version  2.x
 * @author   Lukas Marks <info@lumax-web.de>
 * @link     http://www.lumax-web.de/
 */
App::uses('ClearCacheAppModel', 'ClearCache.Model');

class ClearCache extends ClearCacheAppModel {

    public $name = 'ClearCache';
    
    public $useTable = false;

    public function delete($path = null, $recursive = true) {

        $configuredCache = Cache::configured();
        foreach($configuredCache as $settingName) {
            Cache::clear(false, $settingName);
        }
    }
}