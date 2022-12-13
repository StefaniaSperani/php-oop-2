<?php

class Product
{

    public $name;
    public $price;
    public $ingredients;

    public function __construct(string $_name, int $_price, array $_ingredients)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->ingredients = $_ingredients;
    }





}


?>