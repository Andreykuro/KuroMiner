# KuroMiner 💎

A mining rewards plugin for PocketMine-MP that pays players money whenever they mine ores. Fully integrated with [SimpleEconomy](https://github.com/NhanAZ/SimpleEconomy).

---

## 📋 Requirements

| Dependency | Version | Link |
|---|---|---|
| PocketMine-MP | API 5.42.0+ | [Download](https://github.com/pmmp/PocketMine-MP/releases) |
| PHP | 8.2+ | [Download](https://www.php.net) |
| SimpleEconomy | Latest | [Download](https://github.com/NhanAZ/SimpleEconomy) |

---

## 📦 Installation

1. Place `KuroMiner` into your `/plugins` folder
2. Make sure **SimpleEconomy** is also in `/plugins`
3. Restart your server
4. Players will automatically earn money when mining ores

---

## 🔧 How It Works

1. A player mines an ore block
2. KuroMiner detects the block via a `BlockBreakEvent` listener
3. The corresponding reward is looked up from `Rewards.php`
4. Money is added to the player's balance via SimpleEconomy
5. A popup appears above the hotbar showing how much they earned

---

## 💰 Rewards

| Block | Reward |
|---|---|
| Coal Ore | $5 |
| Iron Ore | $15 |
| Gold Ore | $25 |
| Diamond Ore | $100 |
| Deepslate Coal Ore | $5 |
| Deepslate Iron Ore | $15 |
| Deepslate Gold Ore | $25 |
| Deepslate Diamond Ore | $100 |

> To add or change rewards, edit the `$rewards` array in `Utils/Rewards.php`.

---

## 📁 File Structure

```
KuroMiner/
├── plugin.yml
└── src/
    └── Andreykuro/
        └── KuroMiner/
            ├── Main.php
            ├── Listener/
            │   └── BlockBreakListener.php
            └── Utils/
                ├── Rewards.php
                └── Economy.php
```

---

## ⚙️ plugin.yml

```yaml
name: KuroMiner
version: 0.0.1
main: Andreykuro\KuroMiner\Main
api: 5.42.0
depend:
  - SimpleEconomy
```

---

## 🧩 Plugin Suite

This plugin is part of the **Kuro** plugin suite:

| Plugin | Description |
|---|---|
| [KuroShops](https://github.com/Andreykuro/KuroShops) | In-game shop with categories for Woods, Crops, Food, Misc and Generators |
| **KuroMiner** | Earn money by mining ores |
| [KuroOreSpawner](https://github.com/Andreykuro/KuroOreSpawner) | Place generator blocks that automatically spawn ores |

---

## 👤 Author

**Andreykuro** — KuroMiner v0.0.1

---

## 📄 License

This project is provided as-is for use on PocketMine-MP servers.
