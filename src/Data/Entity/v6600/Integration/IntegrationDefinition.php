<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\Integration;

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
class IntegrationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'integration';

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getEntityClass(): string
    {
        return IntegrationEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return IntegrationCollection::class;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('integration', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('label', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1)]), []),
            new Property('accessKey', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1)]), []),
            new Property('secretAccessKey', 'password', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1)]), []),
            new Property('lastUsageAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), []),
            new Property('admin', 'boolean', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), []),
            new Property('customFields', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('deletedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), []),
            new Property('app', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'app',
                'referenceField' => 'integrationId',
                'localField' => 'id',
                'relation' => 'one_to_one',
            ]),
            new Property('aclRoles', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'acl_role',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('createdNotifications', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('extension', 1)]), [
                'entity' => 'notification',
                'referenceField' => 'createdByIntegrationId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
        ]));
    }
}
