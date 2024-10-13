<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\AppCmsBlockTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\AppCmsBlock\AppCmsBlockEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppCmsBlockTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $appCmsBlockId = null;

    public ?string $languageId = null;

    public ?AppCmsBlockEntity $appCmsBlock = null;

    public ?LanguageEntity $language = null;
}
