<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6670\SalesChannelCountry;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                           add(SalesChannelCountryEntity $entity)
 * @method void                           set(SalesChannelCountryEntity $entity)
 * @method SalesChannelCountryEntity[]    getIterator()
 * @method SalesChannelCountryEntity[]    getElements()
 * @method SalesChannelCountryEntity|null get(string $key)
 * @method SalesChannelCountryEntity|null first()
 * @method SalesChannelCountryEntity|null last()
 */
class SalesChannelCountryCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SalesChannelCountryEntity::class;
    }
}
