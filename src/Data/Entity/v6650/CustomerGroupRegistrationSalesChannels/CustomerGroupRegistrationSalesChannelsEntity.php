<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\CustomerGroupRegistrationSalesChannels;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\CustomerGroup\CustomerGroupEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerGroupRegistrationSalesChannelsEntity extends Entity
{
    public ?string $customerGroupId = null;

    public ?string $salesChannelId = null;

    public ?CustomerGroupEntity $customerGroup = null;

    public ?SalesChannelEntity $salesChannel = null;
}
