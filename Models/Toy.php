<?php
require_once __DIR__ . './Product.php';

class Toy extends Product
{

    public function __construct($_name, $_price, $_image, $_description, $_category)
    {

        parent::__construct($_name, $_price, $_image, $_description, $_category);

        $this->category;
    }
}

?>