<?php

namespace SnipeZ;

use SnipeZ\AntiAdvertising;
use SnipeZ\AntiSwearing;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;
class Core extends PluginBase {

    const PERM_RANK = C::BOLD . C::BLUE . "Permission> " . C::RESET . C::GRAY . "You Need A Rank To Access This Command";
    const PERM_STAFF = C::BOLD . C::BLUE . "Permission> " . C::RESET . C::GRAY . "Only Staff Can Use This Command";
    const USE_IN_GAME = C::BOLD . C::BLUE . "Command> " . C::RESET . C::GRAY . "Use Command In Game";
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents(($this->antiadvertising = new AntiAdvertising($this)), $this);
        $this->getServer()->getPluginManager()->registerEvents(($this->antiswearing = new AntiSwearing($this)), $this);
    }
}
