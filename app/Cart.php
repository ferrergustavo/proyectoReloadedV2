<?php
namespace App;
class Cart
{
    const SESSION_KEY = 'cart';
    public $items=[];
    public $totalQty =0;
    public $totalPrice=0;

    public function __construct($oldCart = null)
    {
        if($oldCart){
            $this->items= $oldCart->items;
            $this->totalQty= $oldCart->totalQty;
            $this->totalPrice= $oldCart->totalPrice;
        }

        $this->lastUpdate = now();
    }

    public function add(Product $product)
    {
        $item = null;

        if (array_key_exists($product->id, $this->items)) {
            $item = $this->items[$product->id];
        }

        if ($item) {
            $qty = $item['qty']+1;

            $this->items[$product->id] = [
                'qty' => $qty,
                'price' => $product->price * $qty,
                'item' => $product,
            ];
        } else {
            $this->items[$product->id] = [
                'qty' => 1,
                'price' => $product->price,
                'item' => $product,
            ];
        }

        $this->totalQty = collect($this->items)->sum('qty');
        $this->totalPrice = collect($this->items)->sum('price');

        return $this;
    }
}