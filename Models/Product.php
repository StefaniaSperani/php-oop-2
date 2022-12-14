<?php
require_once __DIR__ . '/../Traits/Seller.php';
class Product
{
    use Seller;

    public $name;
    public $price;
    public $image;
    public $description;
    public $category;

    public function __construct($_name, $_price, $_image, $_description, Category $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->description = $_description;
        $this->category = $_category;
    }





}


?>