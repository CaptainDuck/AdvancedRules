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

	private $plugin;
	
	public function __construct(Main $plugin){
		$this->plugin = $plugin;

	}
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		if(strtolower($cmd->getName()) === "rules"){
			if(isset($args[0])){
				if($args[0] === "player"){
					if(isset($args[1])){
                                                $sender->sendMessage("§a§l§o>§7>§cRules for Players:§7<§a<");
		            	                $sender->sendMessage("#1: Dont use any mods or hacks");
		                   	        $sender->sendMessage("#2: No cussing, be kind.");
			                        $sender->sendMessage("#3: Be respectful to any staff and others.");
			                        $sender->sendMessage("#4: Inappropriate usernames are discouraged..");
			                        $sender->sendMessage("If you want to learn more do /rules <player, premium, staff, notes>");
					}
				}
                                if($args[0] === "notes"){
                                          $sender->sendMessage("§a§l§o>§7>§cNotes for the Rules:§7<§a<");
		                          $sender->sendMessage("If you disobey the rules repeatedly, you may suffer from any minor/major punishment (based on the disobeyed rules).");
		                          $sender->sendMessage("If you found someone doing this, please contact a staff member to handle this.");
		                          $sender->sendMessage("All rules in players must be obeyed in all ranks.");
	        case "premium":
                        $sender->sendMessage("§a§l§o>§7>§cRules for Premium Players:§7<§a<")
			$sender->sendMessage("#1: Dont use any mods or hacks");
			$sender->sendMessage("#2: No cussing, be kind.");
			$sender->sendMessage("#3: Be respectful to any staff and others.");
			$sender->sendMessage("#4: Inappropriate usernames are discouraged..");
			$sender->sendMessage("If you want to learn more do /rules <player, premium, staff, notes>");
                        return true;
                        break;
	       case "staff":
                        $sender->sendMessage("§a§l§o>§7>§cRules for Staff Members:§7<§a<");
			$sender->sendMessage("#1: Dont use any mods or hacks");
			$sender->sendMessage("#2: No cussing, be kind.");
			$sender->sendMessage("#3: Be respectful to any staff and others.");
			$sender->sendMessage("#4: Inappropriate usernames are discouraged..");
                        $sender->sendMessage("#5: Don't Ban or Kick anyone without any appropriate reason.")
			$sender->sendMessage("If you want to learn more do /rules <player, premium, staff, notes>");
	}
		}
