<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6670\OrderDelivery;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                     add(OrderDeliveryEntity $entity)
 * @method void                     set(OrderDeliveryEntity $entity)
 * @method OrderDeliveryEntity[]    getIterator()
 * @method OrderDeliveryEntity[]    getElements()
 * @method OrderDeliveryEntity|null get(string $key)
 * @method OrderDeliveryEntity|null first()
 * @method OrderDeliveryEntity|null last()
 */
class OrderDeliveryCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return OrderDeliveryEntity::class;
    }
}
