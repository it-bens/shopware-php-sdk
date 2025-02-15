<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6670\OrderCustomer;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6670\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\v6670\Order\OrderEntity;
use Vin\ShopwareSdk\Data\Entity\v6670\Salutation\SalutationEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderCustomerEntity extends Entity
{
    public ?string $customerId = null;

    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?string $email = null;

    public ?string $salutationId = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $company = null;

    public ?string $title = null;

    public ?array $vatIds = null;

    public ?string $customerNumber = null;

    public ?OrderEntity $order = null;

    public ?CustomerEntity $customer = null;

    public ?SalutationEntity $salutation = null;

    public ?string $remoteAddress = null;
}
