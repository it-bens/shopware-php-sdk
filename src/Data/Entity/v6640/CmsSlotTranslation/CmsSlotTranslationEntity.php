<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\CmsSlotTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\CmsSlot\CmsSlotEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsSlotTranslationEntity extends Entity
{
    public ?array $config = null;

    public ?string $cmsSlotId = null;

    public ?string $languageId = null;

    public ?CmsSlotEntity $cmsSlot = null;

    public ?LanguageEntity $language = null;

    public ?string $cmsSlotVersionId = null;
}
