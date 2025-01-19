<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\NumberRangeSalesChannel;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                               add(NumberRangeSalesChannelEntity $entity)
 * @method void                               set(NumberRangeSalesChannelEntity $entity)
 * @method NumberRangeSalesChannelEntity[]    getIterator()
 * @method NumberRangeSalesChannelEntity[]    getElements()
 * @method NumberRangeSalesChannelEntity|null get(string $key)
 * @method NumberRangeSalesChannelEntity|null first()
 * @method NumberRangeSalesChannelEntity|null last()
 */
class NumberRangeSalesChannelCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return NumberRangeSalesChannelEntity::class;
    }
}
