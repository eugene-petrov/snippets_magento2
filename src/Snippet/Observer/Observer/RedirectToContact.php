<?php

namespace Snippet\Observer\Observer;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ActionFlag;
use Magento\Framework\App\Response\RedirectInterface;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

/**
 * Class RedirectToProductView
 * @package Snippet\Observer\Observer
 */
class RedirectToContact implements ObserverInterface
{
    /**
     * @var RedirectInterface
     */
    private $redirect;

    /**
     * @var ActionFlag
     */
    private $actionFlag;

    /**
     * RedirectToProductView constructor.
     * @param RedirectInterface $redirect
     * @param ActionFlag $actionFlag
     */
    public function __construct(RedirectInterface $redirect, ActionFlag $actionFlag)
    {
        $this->redirect = $redirect;
        $this->actionFlag = $actionFlag;
    }

    /**
     * @param Observer $observer
     * @return null
     */
    public function execute(Observer $observer)
    {
        $request = $observer->getEvent()->getData('request');
        if ($request->getModuleName() == 'admin') {
            return;
        }
        if ($request->getModuleName() != 'contact') {
            $controller = $observer->getControllerAction();
            $this->actionFlag->set('', Action::FLAG_NO_DISPATCH, true);
            $this->redirect->redirect($controller->getResponse(), 'contact');
        }
    }
}
