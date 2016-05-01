 <?php

namespace AdvancedRules\Main;

use pocketmine\plugin\PluginBase; 
use AdvancedRules\Rules

class AdvancedRules extends PluginBase{
}
        public function onEnable(){
		              $this->getServer()->getPluginManager()->registerEvents($this, $this);
		              $this->saveDefaultConfig();
		              $this->getLogger()->info("AdvancedRules by CaptainDuck enabled!");
        public function onDisable(){ 
         
                $this->getLogger()->info("onDisable() AdvancedRules by CaptainDuck has been disabled!");
        }
