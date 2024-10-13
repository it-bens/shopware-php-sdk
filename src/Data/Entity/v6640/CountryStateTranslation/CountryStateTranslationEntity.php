<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\CountryStateTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\CountryState\CountryStateEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryStateTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $countryStateId = null;

    public ?string $languageId = null;

    public ?CountryStateEntity $countryState = null;

    public ?LanguageEntity $language = null;
}
