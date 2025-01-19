<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\CurrencyCountryRounding;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                               add(CurrencyCountryRoundingEntity $entity)
 * @method void                               set(CurrencyCountryRoundingEntity $entity)
 * @method CurrencyCountryRoundingEntity[]    getIterator()
 * @method CurrencyCountryRoundingEntity[]    getElements()
 * @method CurrencyCountryRoundingEntity|null get(string $key)
 * @method CurrencyCountryRoundingEntity|null first()
 * @method CurrencyCountryRoundingEntity|null last()
 */
class CurrencyCountryRoundingCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CurrencyCountryRoundingEntity::class;
    }
}
