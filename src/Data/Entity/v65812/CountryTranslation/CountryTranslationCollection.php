<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\CountryTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                          add(CountryTranslationEntity $entity)
 * @method void                          set(CountryTranslationEntity $entity)
 * @method CountryTranslationEntity[]    getIterator()
 * @method CountryTranslationEntity[]    getElements()
 * @method CountryTranslationEntity|null get(string $key)
 * @method CountryTranslationEntity|null first()
 * @method CountryTranslationEntity|null last()
 */
class CountryTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CountryTranslationEntity::class;
    }
}
