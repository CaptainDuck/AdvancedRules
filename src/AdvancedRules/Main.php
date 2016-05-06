<?php

namespace AdvancedRules;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase; 
use AdvancedRules\Rules;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{

    public function onEnable(){
    	    $this->getServer()->getPluginManager()->registerEvents($this, $this);
            $this->getServer()->getLogger()->info(TextFormat::BLUE . "AdvancedRules v1.0.0b by CaptainDuck enabled.");
            $this->saveResource("rules.yml");
            $config = new Config($this->getDataFolder . "rules.yml", Config::YAML);
            $config->save();
    }

    public function onDisable(){
	$this->getServer()->getLogger()->info(TextFormat::GRAY . ">" . TextFormat::RED . "RED" . "AdvancedRules v1.0.0b disabled");
    }

}

?>
