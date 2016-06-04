<?php

namespace AdvancedRules;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase; 
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

    public function onEnable(){
    	    $this->getServer()->getPluginManager()->registerEvents($this, $this);
            $this->getServer()->getLogger()->info(TextFormat::BLUE . "AdvancedRules v1.0.0b by CaptainDuck enabled.");
            $this->saveResource("rules.yml");
            $config = new Config($this->getDataFolder() . "rules.yml", Config::YAML);
            $config->save();
    }
    public function onDisable(){
	$this->getServer()->getLogger()->info(TextFormat::GRAY . ">" . TextFormat::RED . "RED" . "AdvancedRules v1.0.0b disabled");
    }
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
            switch($cmd->getName()){
                case "rules":
                    if($sender->hasPermission("ar.rules")){
                        $sender->sendMessage(C::RED . "Usage: /rules (player, premium, staff)");
                        break;
                	return false;
                    }
                if(isset($args[0])){;
        	    switch($args[0]){
        		case "player":
                            if($sender->hasPermission("ar.player")){
        		        $sender->sendMessage("§a§l§o>§7>§cRules for Players:§7<§a<");
		                $sender->sendMessage("#1:". $this->getConfig()->get("ar1"));
	              	        $sender->sendMessage("#2:". $this->getConfig()->get("ar2"));
		                $sender->sendMessage("#3:". $this->getConfig()->get("ar3"));
		                $sender->sendMessage("#4:". $this->getConfig()->get("ar4"));
		                $sender->sendMessage("If you want to learn more do /rules <player, premium, staff, notes>");
		                return true;
        		        break;
                            }
        	        case "premium":
                            if($sender->hasPermission("ar.premium")){
        		        $sender->sendMessage("§a§l§o>§7>§cRules for Players:§7<§a<");
		                $sender->sendMessage("#1:". $this->getConfig()->get("ar5"));
	              	        $sender->sendMessage("#2:". $this->getConfig()->get("ar6"));
		                $sender->sendMessage("#3:". $this->getConfig()->get("ar7"));
		                $sender->sendMessage("#4:". $this->getConfig()->get("ar8"));
		                $sender->sendMessage("If you want to learn more do /rules <player, premium, staff, notes>");
		                return true;
		                break;
                            }
		        case "staff":
                            if($sender->hasPermission("ar.staff")){
		                $sender->sendMessage("§a§l§o>§7>§cRules for Staff Members:§7<§a<");
		                $sender->sendMessage("#1:". $this->getConfig()->get("ar9"));
	              	        $sender->sendMessage("#2:". $this->getConfig()->get("ar10"));
		                $sender->sendMessage("#3:". $this->getConfig()->get("ar11"));
		                $sender->sendMessage("#4:". $this->getConfig()->get("ar12"));
                                $sender->sendMessage("#5:". $this->getConfig()->get("ar13"));
	                        $sender->sendMessage("If you want to learn more do /rules <player, premium, staff, notes>");
	                        return true;
	                        break;
                            }
                    }
                }
            }
    }
}
