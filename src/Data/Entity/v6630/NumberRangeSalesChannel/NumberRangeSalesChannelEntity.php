<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\NumberRangeSalesChannel;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\NumberRange\NumberRangeEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\NumberRangeType\NumberRangeTypeEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeSalesChannelEntity extends Entity
{
    public ?string $numberRangeId = null;

    public ?string $salesChannelId = null;

    public ?string $numberRangeTypeId = null;

    public ?NumberRangeEntity $numberRange = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?NumberRangeTypeEntity $numberRangeType = null;
}
