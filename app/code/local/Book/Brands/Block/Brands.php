<?php
class Book_Brands_Block_Brands extends Mage_Core_Block_Template
{
  public function _prepareLayout()
  {
    return parent::_prepareLayout();
  }
  public function getBrands()     
  {
    Mage::log("brands get retrieved here");
	$brands = Mage::registry("brands");
	Mage::log($brands);
    return $brands;
  }
}