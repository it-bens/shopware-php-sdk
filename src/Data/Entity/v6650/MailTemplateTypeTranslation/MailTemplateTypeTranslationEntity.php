<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\MailTemplateTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\MailTemplateType\MailTemplateTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateTypeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $mailTemplateTypeId = null;

    public ?string $languageId = null;

    public ?MailTemplateTypeEntity $mailTemplateType = null;

    public ?LanguageEntity $language = null;
}
