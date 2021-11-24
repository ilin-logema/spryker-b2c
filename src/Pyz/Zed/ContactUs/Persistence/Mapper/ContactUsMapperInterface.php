<?php

namespace Pyz\Zed\ContactUs\Persistence\Mapper;

use Generated\Shared\Transfer\ContactUsTransfer;
use Orm\Zed\ContactUs\Persistence\PyzContactUs;

interface ContactUsMapperInterface
{
    /**
     * @param \Orm\Zed\ContactUs\Persistence\PyzContactUs $contactUsEntity
     *
     * @return \Generated\Shared\Transfer\ContactUsTransfer
     */
    public function mapContactUsEntityToContactUsTransfer(PyzContactUs $contactUsEntity): ContactUsTransfer;

    /**
     * @param \Generated\Shared\Transfer\ContactUsTransfer $productConcreteTransfer
     *
     * @return \Orm\Zed\ContactUs\Persistence\PyzContactUs
     */
    public function mapContactUsTransferToContactUsEntity(ContactUsTransfer $productConcreteTransfer): PyzContactUs;

}
