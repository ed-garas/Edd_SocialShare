<?php

namespace Edd\SocialShare\Block;

class Buttons extends \Magento\Framework\View\Element\Template
{
    protected $_product = null;
    protected $_coreRegistry = null;
    protected $_productFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Framework\Registry $registry,
        array $data = []
    )
    {
        $this->_productFactory = $productFactory;
        $this->_coreRegistry = $registry;
        parent::__construct(
            $context,
            $data
        );
    }

    public function getProductData(){
        if (!$this->_product) {
            $this->_product = $this->_coreRegistry->registry('product');
        }

        return $this->_product;
    }

}