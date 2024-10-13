<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\NumberRangeSalesChannel;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\NumberRange\NumberRangeEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\NumberRangeType\NumberRangeTypeEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\SalesChannel\SalesChannelEntity;

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
