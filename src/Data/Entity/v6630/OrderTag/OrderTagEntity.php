<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\OrderTag;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\Order\OrderEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTagEntity extends Entity
{
    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?string $tagId = null;

    public ?OrderEntity $order = null;

    public ?TagEntity $tag = null;
}
