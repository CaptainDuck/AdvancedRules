<?php

namespace AdvancedRules\Main;
use pocketmine\plugin\PluginBase; 
use AdvancedRules\Rules;
use pocketmine\utils\Config;

class AdvancedRules extends PluginBase{

	public function onEnable(){
		       $this->getServer()->getLogger()->info(TextFormat::BLUE . "AdvancedRules v1.0.0b by CaptainDuck enabled.");
                       $this->saveDefaultConfig();
                       $config = new Config($this->getDataFolder . "rules.yml", Config::YAML);
                       $config->save();
	}

	public function onDisable(){
		       $this->getServer()->getLogger()->info(TextFormat::GRAY . ">" . TextFormat::RED . "RED" . "AdvancedRules v1.0.0b disabled");
	}

}

?>
