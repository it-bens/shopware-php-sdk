<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\ProductCustomFieldSet;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\CustomFieldSet\CustomFieldSetEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Product\ProductEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCustomFieldSetEntity extends Entity
{
    public ?string $productId = null;

    public ?string $customFieldSetId = null;

    public ?string $productVersionId = null;

    public ?ProductEntity $product = null;

    public ?CustomFieldSetEntity $customFieldSet = null;
}
