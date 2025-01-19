<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\PropertyGroupOption;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                           add(PropertyGroupOptionEntity $entity)
 * @method void                           set(PropertyGroupOptionEntity $entity)
 * @method PropertyGroupOptionEntity[]    getIterator()
 * @method PropertyGroupOptionEntity[]    getElements()
 * @method PropertyGroupOptionEntity|null get(string $key)
 * @method PropertyGroupOptionEntity|null first()
 * @method PropertyGroupOptionEntity|null last()
 */
class PropertyGroupOptionCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PropertyGroupOptionEntity::class;
    }
}
