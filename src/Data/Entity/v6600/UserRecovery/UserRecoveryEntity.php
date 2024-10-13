<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\UserRecovery;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class UserRecoveryEntity extends Entity
{
    public ?string $hash = null;

    public ?string $userId = null;

    public ?UserEntity $user = null;
}
