<?php
declare(strict_types=1);

namespace ShopMoneyAPI;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use EconomyAPI\EconomyAPI;

class ShopMoneyAPI extends PluginBase
{
  protected $config;
  public $db;
  public $get = [];
  private static $instance = null;

  public static function getInstance(): ShopMoneyAPI
  {
    return static::$instance;
  }

  public function onLoad()
  {
    self::$instance = $this;
  }
  public function onEnable()
  {
    $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
  }
  public function getMoney ($player)
  {
    return EconomyAPI::getInstance ()->myMoney ( $player );
    /*
    return PluginName::getInstance ()->getMoney ($player);
    */
  }
  public function setMoney ($player, $money)
  {
    EconomyAPI::getInstance ()->setMoney ($player, $money);
    /*
    PluginName::getInstance ()->setMoney ($player,$money);
    */
  }
  public function addMoney ($player, $money)
  {
    EconomyAPI::getInstance ()->addMoney ($player, $money);
    /*
    PluginName::getInstance ()->addMoney ($player,$money);
    */
  }
  public function sellMoney ($player, $money)
  {
    return EconomyAPI::getInstance ()->reduceMoney ($player, $money);
    /*
    PluginName::getInstance ()->sellMoney ($player,$money);
    */
  }
}
