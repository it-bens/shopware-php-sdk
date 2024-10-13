<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\Unit;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\UnitTranslation\UnitTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class UnitEntity extends Entity
{
    public ?string $shortCode = null;

    public ?string $name = null;

    public ?ProductCollection $products = null;

    public ?UnitTranslationCollection $translations = null;
}
