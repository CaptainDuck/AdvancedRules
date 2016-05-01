<?php

namespace AdvancedRules\Main;

use pocketmine\plugin\PluginBase; 
use AdvancedRules\Rules

class AdvancedRules extends PluginBase{

	public function onEnable(){
		       $this->getServer()->getLogger()->info(TextFormat::BLUE . "AdvancedRules v1.0.0b by CaptainDuck enabled.");\
	}

	public function onDisable(){
		       $this->getServer()->getLogger()->info(TextFormat::GRAY . ">" . TextFormat::RED . "RED" . "AdvancedRules v1.0.0b disabled");
	}
