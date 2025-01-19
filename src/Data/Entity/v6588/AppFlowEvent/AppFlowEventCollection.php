<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\AppFlowEvent;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                    add(AppFlowEventEntity $entity)
 * @method void                    set(AppFlowEventEntity $entity)
 * @method AppFlowEventEntity[]    getIterator()
 * @method AppFlowEventEntity[]    getElements()
 * @method AppFlowEventEntity|null get(string $key)
 * @method AppFlowEventEntity|null first()
 * @method AppFlowEventEntity|null last()
 */
class AppFlowEventCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppFlowEventEntity::class;
    }
}
