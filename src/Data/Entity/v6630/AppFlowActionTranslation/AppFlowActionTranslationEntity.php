<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\AppFlowActionTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\AppFlowAction\AppFlowActionEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppFlowActionTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $description = null;

    public ?string $headline = null;

    public ?string $appFlowActionId = null;

    public ?string $languageId = null;

    public ?AppFlowActionEntity $appFlowAction = null;

    public ?LanguageEntity $language = null;
}
