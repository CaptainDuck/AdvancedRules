 <?php

namespace AdvancedRules\Main;

use pocketmine\plugin\PluginBase; 

class AdvancedRules extends PluginBase{
}
public function onLoad(){
$this->getLogger()->info("onLoad() has been called!");
}
public function onEnable(){
        $this->getLogger()->info("onEnable() has been called!");
}
public function onDisable(){ $this->getLogger()->info("onDisable() has been called!");
}
