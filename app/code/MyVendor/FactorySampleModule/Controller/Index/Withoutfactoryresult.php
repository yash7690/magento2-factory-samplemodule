<?php

namespace MyVendor\FactorySampleModule\Controller\Index;

class Withoutfactoryresult extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection
        )
    {
        parent::__construct($context);

        $this->collection = $collection;
    }

    public function execute()
    {
        $collection1 = $this->collection;
        $collection1->addAttributeToFilter('type_id', 'simple');
        echo "Simple Product Found: ". $collection1->getSize();

        echo "<br />";

        $collection2 = $this->collection;
        $collection2->addAttributeToFilter('type_id', 'configurable');
        echo "Configurable Product Found: ". $collection2->getSize();
        
        exit;
    }
}
