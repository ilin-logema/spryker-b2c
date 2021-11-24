<?php

namespace Pyz\Zed\ContactUs\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

/**
 * @method \Pyz\Zed\ContactUs\Business\ContactUsFacade getFacade()
 */
class IndexController extends AbstractController
{
    public function indexAction()
    {
        return $this->viewResponse([
            'items' => $this->getFacade()->getContactUsData()
        ]);
    }
}
