<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6670\AppFlowEvent;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6670\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\v6670\Flow\FlowCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppFlowEventEntity extends Entity
{
    public ?string $appId = null;

    public ?string $name = null;

    public ?array $aware = null;

    public ?AppEntity $app = null;

    public ?FlowCollection $flows = null;
}
