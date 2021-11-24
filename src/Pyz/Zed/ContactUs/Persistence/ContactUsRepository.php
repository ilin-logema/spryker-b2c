<?php

namespace Pyz\Zed\ContactUs\Persistence;

use Generated\Shared\Transfer\ContactUsTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\ContactUs\Business\ContactUsBusinessFactory getFactory()
 */
class ContactUsRepository extends AbstractRepository implements ContactUsRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return \Generated\Shared\Transfer\ContactUsTransfer|null
     */
    public function findContactUsById(int $id): ?ContactUsTransfer
    {
        $contactUsEntity = $this->getFactory()
            ->createContactUsQuery()
            ->findOneByIdContactUs($id);

        if ($contactUsEntity === null) {
            return null;
        }

        $contactUsMapper = $this->getFactory()->createContactUsMapper();

        return $contactUsMapper->mapContactUsEntityToContactUsTransfer($contactUsEntity);
    }

    /**
     * @return \Generated\Shared\Transfer\ContactUsTransfer[]
     */
    public function findContactUsCollection(): array
    {

        $contactUsCollection = $this->getFactory()
            ->createContactUsQuery()
            ->find();

        $result = [];
        $contactUsMapper = $this->getFactory()->createContactUsMapper();
        foreach ($contactUsCollection as $contactUsEntity) {
            $result[] = $contactUsMapper->mapContactUsEntityToContactUsTransfer($contactUsEntity);
        }
        $result[] = (new ContactUsTransfer())
            ->setIdContactUs(0)
            ->setName('test')
            ->setMessage('test message');

        return $result;
    }
}
