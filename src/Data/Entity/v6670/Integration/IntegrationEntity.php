<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6670\Integration;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6670\AclRole\AclRoleCollection;
use Vin\ShopwareSdk\Data\Entity\v6670\App\AppEntity;
use Vin\ShopwareSdk\Service\Struct\NotificationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class IntegrationEntity extends Entity
{
    public ?string $label = null;

    public ?string $accessKey = null;

    public ?string $secretAccessKey = null;

    public ?\DateTimeInterface $lastUsageAt = null;

    public ?bool $admin = null;

    public ?\DateTimeInterface $deletedAt = null;

    public ?AppEntity $app = null;

    public ?AclRoleCollection $aclRoles = null;

    public ?NotificationCollection $createdNotifications = null;
}
