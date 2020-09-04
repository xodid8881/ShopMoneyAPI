<?php
declare(strict_types=1);

namespace ShopMoneyAPI;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use CoinAPI\CoinAPI;

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
    return CoinAPI::getInstance ()->SeeCoin ($player);
    /*
    return PluginName::getInstance ()->getMoney ($player);
    */
  }
  public function setMoney ($player, $money)
  {
    return CoinAPI::getInstance ()->SetCoin ($player);
    /*
    OP Command API
    */
    /*
    return PluginName::getInstance ()->setMoney ($player,$money);
    */
  }
  public function addMoney ($player, $money)
  {
    return CoinAPI::getInstance ()->AddCoin ($player);
    /*
    OP Command API
    */
    /*
    return PluginName::getInstance ()->addMoney ($player,$money);
    */
  }
  public function sellMoney ($player, $money)
  {
    return CoinAPI::getInstance ()->SeeCoin ($player);
    /*
    OP Command API
    */
    /*
    return PluginName::getInstance ()->sellMoney ($player,$money);
    */
  }
}
