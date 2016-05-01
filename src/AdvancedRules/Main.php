 <?php

namespace AdvancedRules\Main;

use pocketmine\plugin\PluginBase; 
use AdvancedRules\Rules

class AdvancedRules extends PluginBase{
}
       public function onLoad(){
               $this->getLogger()->info("onLoad() AdvancedRules 1.0.0b by CaptainDuck loaded!");
       }
       public function onEnable(){
               $this->getLogger()->info("onEnable() AdvancedRules 1.0.0b by CaptainDuck enabled!");
       }
       public function onDisable(){
               $this->getLogger()->info("onDisable() AdvancedRules 1.0.0b by CaptainDuck disabled");
       }
}

