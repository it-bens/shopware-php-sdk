<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\ThemeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                        add(ThemeTranslationEntity $entity)
 * @method void                        set(ThemeTranslationEntity $entity)
 * @method ThemeTranslationEntity[]    getIterator()
 * @method ThemeTranslationEntity[]    getElements()
 * @method ThemeTranslationEntity|null get(string $key)
 * @method ThemeTranslationEntity|null first()
 * @method ThemeTranslationEntity|null last()
 */
class ThemeTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ThemeTranslationEntity::class;
    }
}
