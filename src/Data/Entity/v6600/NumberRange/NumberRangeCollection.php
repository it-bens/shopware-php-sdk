<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\NumberRange;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                   add(NumberRangeEntity $entity)
 * @method void                   set(NumberRangeEntity $entity)
 * @method NumberRangeEntity[]    getIterator()
 * @method NumberRangeEntity[]    getElements()
 * @method NumberRangeEntity|null get(string $key)
 * @method NumberRangeEntity|null first()
 * @method NumberRangeEntity|null last()
 */
class NumberRangeCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return NumberRangeEntity::class;
    }
}
