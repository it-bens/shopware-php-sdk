<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\Locale;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\Language\LanguageCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\LocaleTranslation\LocaleTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\User\UserCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LocaleEntity extends Entity
{
    public ?string $code = null;

    public ?string $name = null;

    public ?string $territory = null;

    public ?LanguageCollection $languages = null;

    public ?LocaleTranslationCollection $translations = null;

    public ?UserCollection $users = null;
}
