<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 14/11/2016
 * Time: 20:15
 */

namespace BE\inventory\event;

use pocketmine\event\Cancellable;
use pocketmine\inventory\Inventory;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\event\inventory\InventoryEvent;

class InventoryClickEvent extends InventoryEvent implements Cancellable{
    public static $handlerList = null;

    /** @var Player */
    private $who;
    private $slot;
    /** @var Item */
    private $item;

    /**
     * @param Inventory $inventory
     * @param Player    $who
     * @param int       $slot
     * @param Item      $item
     */
    public function __construct(Inventory $inventory, Player $who, $slot, Item $item){
        $this->who = $who;
        $this->slot = $slot;
        $this->item = $item;
        parent::__construct($inventory);
    }

    /**
     * @return Player
     */
    public function getWhoClicked(){
        return $this->who;
    }

    /**
     * @return int
     */
    public function getSlot(){
        return $this->slot;
    }

    /**
     * @return Item
     */
    public function getItem(){
        return $this->item;
    }
}