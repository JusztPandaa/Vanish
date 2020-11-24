<?php

namespace Panda\Vanish;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\Player;

use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerGameModeChangeEvent;

class Vanish extends PluginBase implements Listener{

  public function onLoad(){
    $this->getLogger()->info("StealthPvP vanish version 1.0 loading....");
  }
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("StealthPvP vanish has been Enabled!");
  }

  public function onDisable(){
    $this->getLogger()->info("StealthPvP vanish has been Disabled!");
  }

  public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
    switch($cmd->getName()){
      case "vanish":
        if(!$sender instaceof Player){
          sender->sendMessage("Use this command InGame!");
          return false;
        }
        if($sender->hasPermission("vanish.use")){
          $sender->sendMessage("§7[!] You have been put into vanish!");
          $sender->sendTip("You are currently §cVANISHED");
          $sender->setGamemode(3);
        }
        if($sender->hasPermission("vanish.use")){
          $sender->sendMessage("§cUnkown command. Please use /help for a list of commands.");
        }
      break;

      case "v":
        if($sender->hasPermission("vanish.use")){
          $sender->sendMessage("§7[!] You have been put into vanish!");
          $sender->sendTip("You are currently §cVANISHED");
          $sender->setGamemode(3);
        }
        if($sender->hasPermission("vanish.use")){
          $sender->sendMessage("§cUnkown command. Please use /help for a list of commands.")
        }
      break;

      case "unvanish":
        if($sender->hasPermission("vanish.use")){
          $sender->sendMessage("§7[!] You have been taken out of vanish");
          $sender->setGamemode(2);
        }
        if($sender->hasPermission("vanish.use")){
          $sender->sendMessage("§cUnkown command. Please use /help for a list of commands.")
        }
      break;

      case "unv":
        if($sender->hasPermission("vanish.use")){
          $sender->sendMessage("§7[!] You have been taken out of vanish");
          $sender->setGamemode(2);
        }
        if($sender->hasPermission("vanish.use")){
          $sender->sendMessage("§cUnkown command. Please use /help for a list of commands.")
        }
      break;
    }
    return true;
  }
}
