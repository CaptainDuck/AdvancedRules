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

class Rules extends PluginBase implements Listener{
class Rules extends Command implements PluginIdentifiableCommand{
