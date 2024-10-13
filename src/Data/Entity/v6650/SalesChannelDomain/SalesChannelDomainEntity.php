<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\SalesChannelDomain;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\Currency\CurrencyEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductExport\ProductExportCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\SnippetSet\SnippetSetEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelDomainEntity extends Entity
{
    public ?string $url = null;

    public ?string $salesChannelId = null;

    public ?string $languageId = null;

    public ?string $currencyId = null;

    public ?string $snippetSetId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?LanguageEntity $language = null;

    public ?CurrencyEntity $currency = null;

    public ?SnippetSetEntity $snippetSet = null;

    public ?SalesChannelEntity $salesChannelDefaultHreflang = null;

    public ?ProductExportCollection $productExports = null;

    public ?bool $hreflangUseOnlyLocale = null;
}
