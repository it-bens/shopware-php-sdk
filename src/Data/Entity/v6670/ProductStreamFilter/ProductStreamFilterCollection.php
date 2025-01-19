<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6670\ProductStreamFilter;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                           add(ProductStreamFilterEntity $entity)
 * @method void                           set(ProductStreamFilterEntity $entity)
 * @method ProductStreamFilterEntity[]    getIterator()
 * @method ProductStreamFilterEntity[]    getElements()
 * @method ProductStreamFilterEntity|null get(string $key)
 * @method ProductStreamFilterEntity|null first()
 * @method ProductStreamFilterEntity|null last()
 */
class ProductStreamFilterCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductStreamFilterEntity::class;
    }
}
