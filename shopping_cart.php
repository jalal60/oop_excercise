<?php
//Write a PHP class called 'ShoppingCart' with properties like 'items' and 'total'. 
//Implement methods to add items to the cart and calculate the total cost.
//It will be associate Array Cart Products=>value.
class ShoppingCart
{
    private $items;
    private $total;
    public function __construct()
    {
        $this->items = [];
        $this->total = 0;
    }
    //Every Item should be Name and Price.
    public function addItems($product, $price)
    {
        $this->items[$product] = $price;
        $this->total += $price;
    }
    public function getTotal()
    {
        return $this->total;
    }
    public function displayItems()
    {
        foreach ($this->items as $key => $value) {
            echo $key . "=" . $value . PHP_EOL;
        }
    }
}
$obj1 = new ShoppingCart();
$obj1->addItems("T-shirt", 150);
$obj1->addItems("Pant", 600);
$obj1->addItems("Shoes", 1200);
$obj1->displayItems();
echo "Total Price=" . $obj1->getTotal();
