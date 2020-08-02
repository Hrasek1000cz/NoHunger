<?php

declare(strict_types=1);

namespace Hrasek1000\NoHunger;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerExhaustEvent;

class Main extends PluginBase implements Listener{

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function Hunger(PlayerExhaustEvent $exhaustEvent) {
        $exhaustEvent->setCancelled(true);
    }
}

