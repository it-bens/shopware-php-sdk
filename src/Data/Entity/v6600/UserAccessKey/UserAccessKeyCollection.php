<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\UserAccessKey;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                     add(UserAccessKeyEntity $entity)
 * @method void                     set(UserAccessKeyEntity $entity)
 * @method UserAccessKeyEntity[]    getIterator()
 * @method UserAccessKeyEntity[]    getElements()
 * @method UserAccessKeyEntity|null get(string $key)
 * @method UserAccessKeyEntity|null first()
 * @method UserAccessKeyEntity|null last()
 */
class UserAccessKeyCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return UserAccessKeyEntity::class;
    }
}
