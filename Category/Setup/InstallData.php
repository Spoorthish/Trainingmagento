<?php

namespace I95dev\Category\Setup;

use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Api\Data\CategoryInterface;
use Magento\Catalog\Api\Data\CategoryInterfaceFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /** @var  CategoryRepositoryInterface */
    private $categoryRepositoryInterface;

    /** @var  CategoryInterfaceFactory */
    private $categoryInterfaceFactory;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        CategoryInterfaceFactory $categoryInterfaceFactory
    ) {
        $this->categoryRepositoryInterface = $categoryRepository;
        $this->categoryInterfaceFactory = $categoryInterfaceFactory;
    }

    /**
     * Installs data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $this->createCategory();
    }

    public function createCategory()
    {

            $category = $this->categoryInterfaceFactory->create();
            $category->setName("I95devCategory");
            /** set root category as parent category **/
            $category->setParentId(2);
            $category->setIsActive(1);
            $category->setData('stores', [0]);
            $this->categoryRepositoryInterface->save($category);
        }

}
