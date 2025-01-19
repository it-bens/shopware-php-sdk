<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\SalesChannelType;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                        add(SalesChannelTypeEntity $entity)
 * @method void                        set(SalesChannelTypeEntity $entity)
 * @method SalesChannelTypeEntity[]    getIterator()
 * @method SalesChannelTypeEntity[]    getElements()
 * @method SalesChannelTypeEntity|null get(string $key)
 * @method SalesChannelTypeEntity|null first()
 * @method SalesChannelTypeEntity|null last()
 */
class SalesChannelTypeCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SalesChannelTypeEntity::class;
    }
}
