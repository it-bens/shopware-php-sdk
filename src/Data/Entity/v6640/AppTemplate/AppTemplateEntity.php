<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\AppTemplate;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\App\AppEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppTemplateEntity extends Entity
{
    public ?string $template = null;

    public ?string $path = null;

    public ?bool $active = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;
}
