<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\ProductCategoryTree;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                           add(ProductCategoryTreeEntity $entity)
 * @method void                           set(ProductCategoryTreeEntity $entity)
 * @method ProductCategoryTreeEntity[]    getIterator()
 * @method ProductCategoryTreeEntity[]    getElements()
 * @method ProductCategoryTreeEntity|null get(string $key)
 * @method ProductCategoryTreeEntity|null first()
 * @method ProductCategoryTreeEntity|null last()
 */
class ProductCategoryTreeCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductCategoryTreeEntity::class;
    }
}
