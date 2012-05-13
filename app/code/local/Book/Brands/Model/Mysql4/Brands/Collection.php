<?php
class Book_BrandsModel_Mysql4_Brands_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
  public function _construct()
  {
    $this->_init('brands/brands');
  }
}