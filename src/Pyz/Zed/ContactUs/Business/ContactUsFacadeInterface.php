<?php

namespace Pyz\Zed\ContactUs\Business;

use Generated\Shared\Transfer\ContactUsTransfer;

interface ContactUsFacadeInterface
{
    /**
     * @return \Generated\Shared\Transfer\ContactUsTransfer[]
     */
    public function getContactUsData(): array;

    /**
     * @param \Generated\Shared\Transfer\ContactUsTransfer $contactUsTransfer
     *
     * @return \Generated\Shared\Transfer\ContactUsTransfer
     */
    public function getContactUsTransfer(ContactUsTransfer $contactUsTransfer): ContactUsTransfer;

    /**
     * @param \Generated\Shared\Transfer\ContactUsTransfer $contactUsTransfer
     */
    public function saveContactUsData(ContactUsTransfer $contactUsTransfer): void;
}
