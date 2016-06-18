<?php

namespace AdvancedRules;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase; 
use pocketmine\command\Command;
use pocketmine\permission\Permission;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase implements Listener{

    public function onEnable(){
    	    $this->getServer()->getPluginManager()->registerEvents($this, $this);
            $this->getServer()->getLogger()->info(C::BLUE. "AdvancedRules v1.0.0b by CaptainDuck enabled.");
            $this->saveResource("config.yml");
    }
    public function onDisable(){
	$this->getServer()->getLogger()->info(TextFormat::GRAY. "AdvancedRules v1.0.0b disabled! :o");
    }
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        switch($cmd->getName()){
            case "rules":
                if($sender->hasPermission("ar.rules")){
                    return true;
                    break;
                }
        }
        if($args[0] == "player") {
                        if($sender->hasPermission("ar.rules.player")){
        		    $sender->sendMessage("§a§l§o>§7>§cRules for Players:§7<§a<");
		            $sender->sendMessage(C::GRAY."#1:". $this->getConfig()->get("ar1"));
	              	    $sender->sendMessage(C::GRAY."#2:". $this->getConfig()->get("ar2"));
		            $sender->sendMessage(C::GRAY."#3:". $this->getConfig()->get("ar3"));
		            $sender->sendMessage(C::GRAY."#4:". $this->getConfig()->get("ar4"));
		            $sender->sendMessage(C::GRAY."If you want to learn more do /rules <player, premium, staff, notes>");
		            return true;
                        }
        }
        	    if($args[0] == "premium") {
                        if($sender->hasPermission("ar.rules.premium")){
        		    $sender->sendMessage("§a§l§o>§7>§cRules for Players:§7<§a<");
		            $sender->sendMessage(C::WHITE."#1:". $this->getConfig()->get("ar5"));
	              	    $sender->sendMessage(C::WHITE."#2:". $this->getConfig()->get("ar6"));
		            $sender->sendMessage(C::WHITE."#3:". $this->getConfig()->get("ar7"));
		            $sender->sendMessage(C::WHITE."#4:". $this->getConfig()->get("ar8"));
		            $sender->sendMessage(C::WHITE."If you want to learn more do /rules <player, premium, staff, notes>");
		            return true;
                        }
                    }
		    if($args[0] == "staff") {
                        if($sender->hasPermission("ar.rules.staff")){
		            $sender->sendMessage("§a§l§o>§7>§cRules for Staff Members:§7<§a<");
		            $sender->sendMessage(C::WHITE."#1:". $this->getConfig()->get("ar9"));
	              	    $sender->sendMessage(C::WHITE."#2:". $this->getConfig()->get("ar10"));
		            $sender->sendMessage(C::WHITE."#3:". $this->getConfig()->get("ar11"));
		            $sender->sendMessage(C::WHITE."#4:". $this->getConfig()->get("ar12"));
                            $sender->sendMessage(C::WHITE."#5:". $this->getConfig()->get("ar13"));
	                    $sender->sendMessage(C::WHITE."If you want to learn more do /rules <player, premium, staff, notes>");
	                    return true;
                        }
                    }
    }
}
