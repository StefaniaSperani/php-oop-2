<?php
require_once 'Category.php';
class Category
{
    public $category;

    public function __construct($_category)
    {
        $this->category = $_category;
    }
}

?>