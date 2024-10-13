<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\SalesChannelCountry;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\Country\CountryEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelCountryEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $countryId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?CountryEntity $country = null;
}
