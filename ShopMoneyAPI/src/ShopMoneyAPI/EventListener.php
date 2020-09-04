<?php
declare(strict_types=1);

namespace ShopMoneyAPI;

use pocketmine\event\Listener;
use NPCShop\entity\NPCEntity;
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use CoinAPI\CoinAPI;

class EventListener implements Listener
{

  protected $plugin;

  public function __construct(ShopMoneyAPI $plugin)
  {
    $this->plugin = $plugin;
  }
}
