<?php

declare(strict_types=1);

namespace SnipeZ;

use SnipeZ\Core;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\utils\TextFormat;
class AntiAdvertising implements Listener {
private $links = [".cc", ".net", ".co", ".co.uk", ".ddns", ".ddns.net", ".cf", ".pocket.pe", ".no-ip", ".live", ".ml", ".gov", "http://", "ip", "port", "https://", "www", "cc", "net", "co", "couk", "ddns", "ddns.net", "cf", "pocket.pe", "noip", "live", "ml", "gov", "http://", "ip", "port", "https://", "www"];
public function __construct(Core $plugin) {
#Useless
}
public function onChat(PlayerChatEvent $event) {
$msg = $event->getMessage();
$player = $event->getPlayer();
foreach ($this->links as $links) {
if (strpos($msg, $links) !== false) {
$player->sendMessage(TextFormat::RED . "§l§9Anti-Core > §6Please don't advertise on our server.");
$event->setCancelled(true);
return;
}
}
}
}