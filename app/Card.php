<?php

namespace App;



class Card
{
    public $items = null;
    public $totalprice = 0;
    public $totalQty = 0;
    public $number = 0;

    public function __construct($oldcard)
    {
        if ($oldcard) {
            $this->items = $oldcard->items;
            $this->totalprice = $oldcard->totalprice;
            $this->totalQty =$oldcard->totalQty;
        }
    }

    public function add($item, $id)
    {
        $stor =['pricetotal' => 0, 'price' => $item->price,'id'=>$item->id, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $stor = $this->items[$id];
            }
        }

        $this->items[$id] = $stor;
        $this->totalQty = $this->totalQty +1 ;
        $this->totalprice += $item->price;

    }
}
