<?php
namespace Andreykuro\KuroMiner\Listener;

use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\player\Player;
use Andreykuro\KuroMiner\Main;
use Andreykuro\KuroMiner\Utils\Rewards;
use Andreykuro\KuroMiner\Utils\Economy;

class BlockBreakListener implements Listener {

    private Main $plugin;

    public function __construct(Main $plugin) {
        $this->plugin = $plugin;
    }

    public function onBlockBreak(BlockBreakEvent $event): void {
        $player = $event->getPlayer();
        $block = $event->getBlock();
        $blockName = $block->getName();

        $reward = Rewards::getReward($blockName);

        if($reward === null) return;

        $success = Economy::addMoney($player, $reward);

        if($success){
            $player->sendPopup("§a+$" . $reward . " §ffor mining §e" . $blockName . "§f!");
        }
    }
}