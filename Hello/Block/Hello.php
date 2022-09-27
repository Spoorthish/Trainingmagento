<?php

namespace I95dev\Hello\Block;

/*
 * I95dev Hello Block
 */

class Hello extends \Magento\Framework\View\Element\Template
{
    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * getContentForDisplay
     * @return string
     */
    public function getTitle()
    {
        return __("popup");
    }
    public function getContent()
    {
        return __("hi hello bye");
    }
    public function getClick()
    {
        return __("Click Me");
    }
}
?>
