<?php
$code = 'product_type';
$model = Mage::getModel('catalog/resource_eav_attribute')->loadByCode('catalog_product', $code);

if ($model->getId() != null) {
    /** @var Mage_Catalog_Model_Resource_Setup $this */
    $installer = $this;
    $installer->startSetup();
    $installer->removeAttribute('catalog_product', $code);
    $installer->endSetup();
}