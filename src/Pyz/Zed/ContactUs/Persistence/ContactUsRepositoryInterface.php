<?php

namespace Pyz\Zed\ContactUs\Persistence;

use Generated\Shared\Transfer\ContactUsTransfer;

interface ContactUsRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return \Generated\Shared\Transfer\ContactUsTransfer|null
     */
    public function findContactUsById(int $id): ?ContactUsTransfer;

    /**
     * @return \Generated\Shared\Transfer\ContactUsTransfer[]
     */
    public function findContactUsCollection(): array;
}
