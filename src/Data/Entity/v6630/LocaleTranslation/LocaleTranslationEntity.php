<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\LocaleTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\Locale\LocaleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LocaleTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $territory = null;

    public ?string $localeId = null;

    public ?string $languageId = null;

    public ?LocaleEntity $locale = null;

    public ?LanguageEntity $language = null;
}
