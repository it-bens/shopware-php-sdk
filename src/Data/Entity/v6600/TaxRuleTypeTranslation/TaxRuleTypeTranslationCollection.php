<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\TaxRuleTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                              add(TaxRuleTypeTranslationEntity $entity)
 * @method void                              set(TaxRuleTypeTranslationEntity $entity)
 * @method TaxRuleTypeTranslationEntity[]    getIterator()
 * @method TaxRuleTypeTranslationEntity[]    getElements()
 * @method TaxRuleTypeTranslationEntity|null get(string $key)
 * @method TaxRuleTypeTranslationEntity|null first()
 * @method TaxRuleTypeTranslationEntity|null last()
 */
class TaxRuleTypeTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return TaxRuleTypeTranslationEntity::class;
    }
}
