<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\ThemeMedia;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                  add(ThemeMediaEntity $entity)
 * @method void                  set(ThemeMediaEntity $entity)
 * @method ThemeMediaEntity[]    getIterator()
 * @method ThemeMediaEntity[]    getElements()
 * @method ThemeMediaEntity|null get(string $key)
 * @method ThemeMediaEntity|null first()
 * @method ThemeMediaEntity|null last()
 */
class ThemeMediaCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ThemeMediaEntity::class;
    }
}
