<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6670\UserConfig;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6670\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class UserConfigEntity extends Entity
{
    public ?string $userId = null;

    public ?string $key = null;

    public ?array $value = null;

    public ?UserEntity $user = null;
}
