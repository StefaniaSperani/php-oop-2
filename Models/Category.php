<?php
require_once 'Category.php';
class Category
{
    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }
}

?>