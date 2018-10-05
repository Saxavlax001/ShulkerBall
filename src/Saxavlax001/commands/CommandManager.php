<?php

declare(strict_types = 1);

namespace Saxavlax001\commands;

use Saxavlax001\Main;
use pocketmine\command\Command;
use pocketmine\Server as PMServer;

class CommandManager {

    public static function init(){

        $cmds = [
            new SummonCommand("summon"),
        ];

        PMServer::getInstance()->getCommandMap()->registerAll("pocketmine", $cmds);
    }
}