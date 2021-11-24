<?php

namespace Pyz\Zed\ContactUs\Persistence;

use Generated\Shared\Transfer\ContactUsTransfer;

interface ContactUsEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\ContactUsTransfer $contactUsTransfer
     */
    public function saveContactUs(ContactUsTransfer $contactUsTransfer): void;
}
