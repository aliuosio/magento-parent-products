<?php

$code = 'basic_model';
$model = Mage::getModel('catalog/resource_eav_attribute')->loadByCode('catalog_product', $code);

if ($model->getId() == null) {
    /** @var Mage_Catalog_Model_Resource_Setup $this */
    $installer = $this;
    $installer->startSetup();

    $installer->addAttribute('catalog_product', $code, array(
        'group' => 'Helmet Options',
        'label' => 'Parent Basic Product',
        'note' => '',
        'type' => 'int',
        'input' => 'select',
        'frontend_class' => '',
        'source' => 'basicmodel/products',
        'backend' => '',
        'frontend' => '',
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'required' => false,
        'visible_on_front' => true,
        'is_configurable' => false,
        'used_in_product_listing' => true,
        'sort_order' => 1,
    ));

    $installer->endSetup();
}