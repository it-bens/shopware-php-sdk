<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\PromotionPersonaCustomer;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\Promotion\PromotionEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionPersonaCustomerEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $customerId = null;

    public ?PromotionEntity $promotion = null;

    public ?CustomerEntity $customer = null;
}
