<?php

namespace Pyz\Zed\ContactUs\Persistence;

use Orm\Zed\ContactUs\Persistence\PyzContactUsQuery;
use Pyz\Zed\ContactUs\Persistence\Mapper\ContactUsMapper;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

class ContactUsPersistenceFactory extends AbstractPersistenceFactory
{

    /**
     * @return \Orm\Zed\ContactUs\Persistence\PyzContactUsQuery
     */
    public function createContactUsQuery(): PyzContactUsQuery
    {
        return PyzContactUsQuery::create();
    }

    /**
     * @return \Pyz\Zed\ContactUs\Persistence\Mapper\ContactUsMapper
     */
    public function createContactUsMapper(): ContactUsMapper
    {
        return new ContactUsMapper();
    }
}
