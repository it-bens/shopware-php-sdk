<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\ProductSearchKeyword;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                            add(ProductSearchKeywordEntity $entity)
 * @method void                            set(ProductSearchKeywordEntity $entity)
 * @method ProductSearchKeywordEntity[]    getIterator()
 * @method ProductSearchKeywordEntity[]    getElements()
 * @method ProductSearchKeywordEntity|null get(string $key)
 * @method ProductSearchKeywordEntity|null first()
 * @method ProductSearchKeywordEntity|null last()
 */
class ProductSearchKeywordCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductSearchKeywordEntity::class;
    }
}
