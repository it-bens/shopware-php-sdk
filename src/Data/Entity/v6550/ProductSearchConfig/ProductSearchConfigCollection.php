<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\ProductSearchConfig;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                           add(ProductSearchConfigEntity $entity)
 * @method void                           set(ProductSearchConfigEntity $entity)
 * @method ProductSearchConfigEntity[]    getIterator()
 * @method ProductSearchConfigEntity[]    getElements()
 * @method ProductSearchConfigEntity|null get(string $key)
 * @method ProductSearchConfigEntity|null first()
 * @method ProductSearchConfigEntity|null last()
 */
class ProductSearchConfigCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductSearchConfigEntity::class;
    }
}
