<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\Currency;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\CurrencyCountryRounding\CurrencyCountryRoundingCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\CurrencyTranslation\CurrencyTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\Order\OrderCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\ProductExport\ProductExportCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\PromotionDiscountPrices\PromotionDiscountPricesCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\SalesChannelDomain\SalesChannelDomainCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyEntity extends Entity
{
    public ?float $factor = null;

    public ?string $symbol = null;

    public ?string $isoCode = null;

    public ?string $shortName = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?bool $isSystemDefault = null;

    public ?float $taxFreeFrom = null;

    public ?CurrencyTranslationCollection $translations = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?OrderCollection $orders = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?SalesChannelDomainCollection $salesChannelDomains = null;

    public ?PromotionDiscountPricesCollection $promotionDiscountPrices = null;

    public ?ProductExportCollection $productExports = null;

    public ?array $itemRounding = null;

    public ?array $totalRounding = null;

    public ?CurrencyCountryRoundingCollection $countryRoundings = null;
}
