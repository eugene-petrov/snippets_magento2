<?php

namespace Snippet\Layout\Controller\Layout;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\Page as ResultPage;

/**
 * Banner loading
 */
class Index extends Action
{
    /**
     * @var ResultPage
     */
    private $resultPage;

    /**
     * @param Context $context
     * @param ResultPage $resultPage
     */
    public function __construct(Context $context, ResultPage $resultPage)
    {
        $this->resultPage = $resultPage;
        parent::__construct($context);
    }

    /**
     * @return ResultPage
     */
    public function execute()
    {
        $this->resultPage->initLayout();
        return $this->resultPage;
    }
}
