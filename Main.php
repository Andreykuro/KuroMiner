<?php
namespace Andreykuro\KuroMiner;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use Andreykuro\KuroMiner\Listener\BlockBreakListener;

class Main extends PluginBase implements Listener {

    public static Main $instance;

    public function onEnable(): void {
        self::$instance = $this;
        $this->getServer()->getPluginManager()->registerEvents(new BlockBreakListener($this), $this);
        $this->getLogger()->info("KuroMiner Enabled!");
    }

    public static function getInstance(): Main {
        return self::$instance;
    }
}
