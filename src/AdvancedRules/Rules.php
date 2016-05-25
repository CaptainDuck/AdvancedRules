<?php
namespace AdvancedRules;

use pocketmine\utils\TextFormat as C;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\events\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\CommandExecutor;
use pocketmine\command\PluginCommand;
use pocketmine\permission\Permission;
use pocketmine\command\ConsoleCommandSender;

class Rules extends Command implements Listener{


    public function onEnable(){
    	    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
	private $plugin;
	
	public function __construct(Main $plugin){
		$this->plugin = $plugin;

	}
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
                switch($command->getName()){
                	case rules:
                            if($sender->hasPermission("rules.command"))
                		$sender->sendMessage(C::RED . "Usage: /rules (player, premium, staff)");
                		break;
                		return false;
                		}
                        if(isset($args[0]));
        	                switch ($args[0]) {
        		                case player:
        		                       $sender->sendMessage("§a§l§o>§7>§cRules for Players:§7<§a<");
		                               $sender->sendMessage("#1:". $this->getConfig()->get("ar1"));
	              	                       $sender->sendMessage("#2:". $this->getConfig()->get("ar2"));
		                               $sender->sendMessage("#3:". $this->getConfig()->get("ar3"));
		                               $sender->sendMessage("#4:". $this->getConfig()->get("ar4"));
		                               $sender->sendMessage("If you want to learn more do /rules <player, premium, staff, notes>");
		                               return true;
        		                       break;
        		                case premium:
        		                       $sender->sendMessage("§a§l§o>§7>§cRules for Players:§7<§a<");
		                               $sender->sendMessage("#1:". $this->getConfig()->get("ar5"));
	              	                       $sender->sendMessage("#2:". $this->getConfig()->get("ar6"));
		                               $sender->sendMessage("#3:". $this->getConfig()->get("ar7"));
		                               $sender->sendMessage("#4:". $this->getConfig()->get("ar8"));
		                               $sender->sendMessage("If you want to learn more do /rules <player, premium, staff, notes>");
		                               return true;
		                               break;
		                        case staff:
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
}
