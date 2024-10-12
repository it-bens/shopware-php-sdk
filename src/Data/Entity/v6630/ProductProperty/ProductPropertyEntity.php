<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\ProductProperty;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\PropertyGroupOption\PropertyGroupOptionEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductPropertyEntity extends Entity
{
    public ?string $productId = null;
    public ?string $productVersionId = null;
    public ?string $optionId = null;
    public ?ProductEntity $product = null;
    public ?PropertyGroupOptionEntity $option = null;
}
