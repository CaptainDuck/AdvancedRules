 <?php

namespace AdvancedRules\Main;

use pocketmine\plugin\PluginBase; 

class AdvancedRules extends PluginBase{
}
public function onLoad(){
$this->getLogger()->info("onLoad() AdvancedRules by CaptainDuck has been enabled!");
}
public function onEnable(){
        $this->getLogger()->info("onEnable() AdvancedRules by CaptainDuck has been enabled!");
}
public function onDisable(){ $this->getLogger()->info("onDisable() AdvancedRules by CaptainDuck has been disabled!");
}
