<?php

namespace Pyz\Zed\ContactUs\Business;

use Generated\Shared\Transfer\ContactUsTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\ContactUs\Business\ContactUsBusinessFactory getFactory()
 */
class ContactUsFacade extends AbstractFacade implements ContactUsFacadeInterface
{

    /**
     * @return \Generated\Shared\Transfer\ContactUsTransfer[]
     */
    public function getContactUsData(): array
    {
        $repository = $this->getRepository();
        return $repository->findContactUsCollection();
    }

    /**
     * @param \Generated\Shared\Transfer\ContactUsTransfer $contactUsTransfer
     *
     * @return \Generated\Shared\Transfer\ContactUsTransfer
     */
    public function getContactUsTransfer(ContactUsTransfer $contactUsTransfer): ContactUsTransfer
    {
        /** @var \Pyz\Zed\ContactUs\Persistence\ContactUsRepositoryInterface $repository */
        $repository = $this->getRepository();
        return $repository->findContactUsById($contactUsTransfer->getIdContactUs());
    }

    public function saveContactUsData(ContactUsTransfer $contactUsTransfer): void
    {
        /** @var \Pyz\Zed\ContactUs\Persistence\ContactUsEntityManagerInterface $entityManager */
        $entityManager = $this->getEntityManager();
        $entityManager->saveContactUs($contactUsTransfer);
    }
}
