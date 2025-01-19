<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6670\OrderTransaction;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                        add(OrderTransactionEntity $entity)
 * @method void                        set(OrderTransactionEntity $entity)
 * @method OrderTransactionEntity[]    getIterator()
 * @method OrderTransactionEntity[]    getElements()
 * @method OrderTransactionEntity|null get(string $key)
 * @method OrderTransactionEntity|null first()
 * @method OrderTransactionEntity|null last()
 */
class OrderTransactionCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return OrderTransactionEntity::class;
    }
}
