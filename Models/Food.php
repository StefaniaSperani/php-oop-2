<?php
require_once __DIR__ . './Product.php';

class Food extends Product
{
    public $taste;
    public $deadline;

    public function __construct($_name, $_price, $_image, $_description, $_taste, $_deadline, $_category)
    {
        $this->taste = $_taste;
        $this->deadline = $_deadline;

        parent::__construct($_name, $_price, $_image, $_description, $_category);

        $this->category;
    }
}

?>