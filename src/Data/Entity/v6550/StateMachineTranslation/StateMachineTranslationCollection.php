<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\StateMachineTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                               add(StateMachineTranslationEntity $entity)
 * @method void                               set(StateMachineTranslationEntity $entity)
 * @method StateMachineTranslationEntity[]    getIterator()
 * @method StateMachineTranslationEntity[]    getElements()
 * @method StateMachineTranslationEntity|null get(string $key)
 * @method StateMachineTranslationEntity|null first()
 * @method StateMachineTranslationEntity|null last()
 */
class StateMachineTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return StateMachineTranslationEntity::class;
    }
}
