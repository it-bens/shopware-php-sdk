<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\DocumentBaseConfigSalesChannel;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\DocumentBaseConfig\DocumentBaseConfigEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\DocumentType\DocumentTypeEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentBaseConfigSalesChannelEntity extends Entity
{
    public ?string $documentBaseConfigId = null;

    public ?string $salesChannelId = null;

    public ?string $documentTypeId = null;

    public ?DocumentTypeEntity $documentType = null;

    public ?DocumentBaseConfigEntity $documentBaseConfig = null;

    public ?SalesChannelEntity $salesChannel = null;
}
