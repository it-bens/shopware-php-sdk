<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\LogEntry;

use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class LogEntryEntity extends Entity
{
    public ?string $message = null;

    public ?int $level = null;

    public ?string $channel = null;

    public ?array $context = null;

    public ?array $extra = null;
}
