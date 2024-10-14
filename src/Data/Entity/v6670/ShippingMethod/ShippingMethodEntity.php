<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6670\ShippingMethod;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6670\AppShippingMethod\AppShippingMethodEntity;
use Vin\ShopwareSdk\Data\Entity\v6670\DeliveryTime\DeliveryTimeEntity;
use Vin\ShopwareSdk\Data\Entity\v6670\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6670\OrderDelivery\OrderDeliveryCollection;
use Vin\ShopwareSdk\Data\Entity\v6670\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\v6670\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6670\ShippingMethodPrice\ShippingMethodPriceCollection;
use Vin\ShopwareSdk\Data\Entity\v6670\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6670\Tag\TagCollection;
use Vin\ShopwareSdk\Data\Entity\v6670\Tax\TaxEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodEntity extends Entity
{
    public ?string $name = null;

    public ?bool $active = null;

    public ?int $position = null;

    public ?string $availabilityRuleId = null;

    public ?string $mediaId = null;

    public ?string $deliveryTimeId = null;

    public ?string $taxType = null;

    public ?string $taxId = null;

    public ?DeliveryTimeEntity $deliveryTime = null;

    public ?string $description = null;

    public ?string $trackingUrl = null;

    public ?ShippingMethodTranslationCollection $translations = null;

    public ?RuleEntity $availabilityRule = null;

    public ?ShippingMethodPriceCollection $prices = null;

    public ?MediaEntity $media = null;

    public ?TagCollection $tags = null;

    public ?OrderDeliveryCollection $orderDeliveries = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?TaxEntity $tax = null;

    public ?AppShippingMethodEntity $appShippingMethod = null;

    public ?string $technicalName = null;
}
