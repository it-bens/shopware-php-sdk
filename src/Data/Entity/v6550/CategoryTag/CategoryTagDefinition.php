<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\CategoryTag;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Schema\Flag;
use Vin\ShopwareSdk\Data\Schema\FlagCollection;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\PropertyCollection;
use Vin\ShopwareSdk\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CategoryTagDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'category_tag';

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getEntityClass(): string
    {
        return CategoryTagEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return CategoryTagCollection::class;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('category_tag', new PropertyCollection([
            new Property('categoryId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('categoryVersionId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('tagId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('category', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'category',
                'referenceField' => 'id',
                'localField' => 'categoryId',
                'relation' => 'many_to_one',
            ]),
            new Property('tag', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'tag',
                'referenceField' => 'id',
                'localField' => 'tagId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}
