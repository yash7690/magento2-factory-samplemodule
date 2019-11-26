<?php

namespace MyVendor\FactorySampleModule\Controller\Index;

class Withfactoryresult extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory
        )
    {
        parent::__construct($context);

        $this->collectionFactory = $collectionFactory;
    }

    public function execute()
    {
        $collection1 = $this->collectionFactory->create();
        $collection1->addAttributeToFilter('type_id', 'simple');
        echo "Simple Product Found: ". $collection1->getSize();

        echo "<br />";

        $collection2 = $this->collectionFactory->create();
        $collection2->addAttributeToFilter('type_id', 'configurable');
        echo "Configurable Product Found: ". $collection2->getSize();
        
        exit;
    }
}
