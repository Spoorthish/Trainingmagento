<?php
namespace I95dev\Category\Plugin;
use \Magneto\Catalog\Model\ResourceModel\Category\Collection;


class Product
{
// registary class is used to manage the values
    public function __construct(
        \Magento\Framework\Registry $registry,
        array $data = []
    )
    {
        $this->_registry = $registry;
    }
    public function getCurrentCategory()
    {
        return  $this->_registry->registry('current_category');
    }
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        $categories= $this->getCurrentCategory()->getParentCategory();
        return  $categories->getName(). "-" .$result;
    }
}
?>
