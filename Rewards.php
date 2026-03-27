<?php
namespace Andreykuro\KuroMiner\Utils;

class Rewards {

    private static array $rewards = [
        "Coal Ore"      => 5,
        "Iron Ore"      => 15,
        "Gold Ore"      => 25,
        "Diamond Ore"   => 100,

        // Deepslate variants
        "Deepslate Coal Ore"    => 5,
        "Deepslate Iron Ore"    => 15,
        "Deepslate Gold Ore"    => 25,
        "Deepslate Diamond Ore" => 100,
    ];

    public static function getReward(string $blockName): ?int {
        return self::$rewards[$blockName] ?? null;
    }

    public static function getAllRewards(): array {
        return self::$rewards;
    }
}