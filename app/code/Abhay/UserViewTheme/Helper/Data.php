<?php

namespace Abhay\UserViewTheme\Helper;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Template;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {

    protected $_storeManager;
    const SHOW_NEWS_LETTER_ENABLE = 'abhay/footer/shownewsletter_enable';
    const FOOTER_NEWSLETTER_TITLE = 'abhay/footer/footer_newsletter_title';

    public function __construct(
        \Magento\Framework\App\Helper\Context $context, 
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getBaseUrl() 
    {
        return $this->_storeManager->getStore()->getBaseUrl();
    }
    public function getShowNewsLetterEnable() 
    {
        return $this->scopeConfig->getValue(self::SHOW_NEWS_LETTER_ENABLE);
    }
    public function getFooterNewsLetterTitle() 
    {
        return $this->scopeConfig->getValue(self::FOOTER_NEWSLETTER_TITLE);
    }
}