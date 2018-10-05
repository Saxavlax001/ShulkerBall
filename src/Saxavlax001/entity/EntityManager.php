<?php

declare(strict_types = 1);

namespace Saxavlax001\entity;

use Saxavlax001\entity\mob\Shulker;
use pocketmine\entity\Entity;
use Saxavlax001\Main;

class EntityManager extends Entity {

    public static function init(): void{
        if(Main::$registerVanillaEntities){
            self::registerEntity(Shulker::class, true, ['Shulker', 'minecraft:shulker']);
    }
  }
}
