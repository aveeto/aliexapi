<?php 

namespace AliexApi\Operations;

class ListProducts extends AbstractOperation
{
    public function getName()
    {
        return 'listHotProducts';
    }

    public function setCategoryId($categoryId)
    {
        $this->parameter['categoryId'] = $categoryId;
        return $this;
    }

    public function setLocalCurrency($localCurrency)
    {
        $this->parameter['localCurrency'] = $localCurrency;
        return $this;
    }    
}
