<?php

trait Seller
{
    protected $seller;

    public function getSeller()
    {
        return $this->seller;
    }

    public function setSeller($_seller)
    {
        $this->seller = $_seller;
    }
}



?>