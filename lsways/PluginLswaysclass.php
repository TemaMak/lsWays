<?php

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginLsways extends Plugin {

    public function Activate() {
        return true;
    }

    public function Deactivate(){
    	return true;
    }

    public function Init() {    	
		return true;
    }
}
?>
