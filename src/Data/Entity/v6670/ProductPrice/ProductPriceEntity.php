<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6670\ProductPrice;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6670\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v6670\Rule\RuleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductPriceEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $ruleId = null;

    public ?array $price = null;

    public ?int $quantityStart = null;

    public ?int $quantityEnd = null;

    public ?ProductEntity $product = null;

    public ?RuleEntity $rule = null;
}
