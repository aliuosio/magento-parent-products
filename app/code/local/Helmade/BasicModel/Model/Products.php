<?php

/**
 * Class Helmade_BasicModel_Model_Basic_Model_Products
 */
class Helmade_BasicModel_Model_Products extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{

    public function getAllOptions()
    {
        /** @var $products Mage_Catalog_Model_Resource_Product_Collection */
        $products = Mage::getResourceModel('catalog/product_collection')
            ->addAttributeToSelect('name');

        if (is_null($this->_options)) {
            $this->_options = array(
                array('label' => '', 'value' => '')
            );

            foreach ($products->getItems() as $product) {
                $this->_options[] = array('label' => $product->getName(), 'value' => $product->getId());
            }
        }

        return $this->_options;
    }

}