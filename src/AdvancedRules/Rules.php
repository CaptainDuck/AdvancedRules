<?php
namespace AdvancedRules\Rules;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\command\PluginIdentifiableCommand;
use AdvancedRules\Main

class Rules extends PluginBase implements Listener{
class Rules extends Command implements PluginIdentifiableCommand{

  public function __construct(){
		$this->plugin = $plugin;
	parent::__construct("rules", "The list of rules for this server!", "/rules <player, premium, staff, notes>");
	}
	
	}
	public function execute(CommandSender $sender, $lbl, array $args){
		if(!isset($args[0]) or strtolower($args[0]) === "player"){
			$sender->sendMessage("#1: Dont use any mods or hacks");
			$sender->sendMessage("#2: No cussing, be kind.");
			$sender->sendMessage("#3: Be respectful to any staff or others.");
			$sender->sendMessage("#4: Inappropriate usernames are discouraged..");
			$sender->sendMessage("If you want to learn more do /rules <player, premium, staff, notes>");
		}
  public function execute(CommandSender $sender, $lbl, array $args){
		if(!isset($args[0]) or strtolower($args[0]) === "notes"){
		$sender->sendMessage("If you disobey the rules repeatedly, you may suffer from any minor/major punishment (based on the disobeyed rules).");
		$sender->sendMessage("If you found someone doing this, please contact a staff member to handle this.");
		$sender->sendMessage("All rules in players must be obeyed in all ranks.")
		return true;
		}
	public function execute(CommandSender $sender, $lbl, array $args){
		if(!isset($args[0]) or strtolower($args[0]) === "premium"){
			$sender->sendMessage("#1: Dont use any mods or hacks");
			$sender->sendMessage("#2: No cussing, be kind.");
			$sender->sendMessage("#3: Be respectful to any staff or others.");
			$sender->sendMessage("#4: Inappropriate usernames are discouraged..");
			$sender->sendMessage("If you want to learn more do /rules <player, premium, staff, notes>");
		}
		public function execute(CommandSender $sender, $lbl, array $args){
		if(!isset($args[0]) or strtolower($args[0]) === "staff"){
			$sender->sendMessage("#1: Dont use any mods or hacks");
			$sender->sendMessage("#2: No cussing, be kind.");
			$sender->sendMessage("#3: Be respectful to any staff or others.");
			$sender->sendMessage("#4: Inappropriate usernames are discouraged..");
			$sender->sendMessage("If you want to learn more do /rules <player, premium, staff, notes>");
		}
