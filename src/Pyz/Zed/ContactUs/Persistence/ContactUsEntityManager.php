<?php

namespace Pyz\Zed\ContactUs\Persistence;

use Generated\Shared\Transfer\ContactUsTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * @method \Pyz\Zed\ContactUs\Business\ContactUsBusinessFactory getFactory()
 */
class ContactUsEntityManager extends AbstractEntityManager implements ContactUsEntityManagerInterface
{


    /**
     * @param \Generated\Shared\Transfer\ContactUsTransfer $contactUsTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function saveContactUs(ContactUsTransfer $contactUsTransfer): void {
        $contactUsMapper = $this->getFactory()->createContactUsMapper();
        $contactUsEntity = $contactUsMapper->mapContactUsTransferToContactUsEntity($contactUsTransfer);

        $contactUsEntity->save();
    }
}
