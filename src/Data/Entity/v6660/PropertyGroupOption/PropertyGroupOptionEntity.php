<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\PropertyGroupOption;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\PropertyGroup\PropertyGroupEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupOptionEntity extends Entity
{
    public ?string $groupId = null;
    public ?string $name = null;
    public ?int $position = null;
    public ?string $colorHexCode = null;
    public ?string $mediaId = null;
    public ?MediaEntity $media = null;
    public ?PropertyGroupEntity $group = null;
    public ?PropertyGroupOptionTranslationCollection $translations = null;
    public ?ProductConfiguratorSettingCollection $productConfiguratorSettings = null;
    public ?ProductCollection $productProperties = null;
    public ?ProductCollection $productOptions = null;
}
