<?php

namespace Saxavlax001;

use Saxavlax001\entity\EntityManager;
use Saxavlax001\commands\CommandManager;
use Saxavlax001\commands\SummonCommand;
use pocketmine\level\Level;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginLogger;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {

               public function onEnable(){
	$this->loadEverythingElse();
              $this->getLogger()->info(TextFormat::GREEN."ShulkerBall enabled!");
}


	private function loadEverythingElse(){
                            CommandManager::init();
		EntityManager::init();
        }

	public static $registerVanillaEntities = true;
}
