<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\StateMachine;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                    add(StateMachineEntity $entity)
 * @method void                    set(StateMachineEntity $entity)
 * @method StateMachineEntity[]    getIterator()
 * @method StateMachineEntity[]    getElements()
 * @method StateMachineEntity|null get(string $key)
 * @method StateMachineEntity|null first()
 * @method StateMachineEntity|null last()
 */
class StateMachineCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return StateMachineEntity::class;
    }
}
