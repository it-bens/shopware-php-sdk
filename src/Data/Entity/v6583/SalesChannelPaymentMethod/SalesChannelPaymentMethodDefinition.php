<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6583\SalesChannelPaymentMethod;

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
class SalesChannelPaymentMethodDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'sales_channel_payment_method';

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getEntityClass(): string
    {
        return SalesChannelPaymentMethodEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return SalesChannelPaymentMethodCollection::class;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('sales_channel_payment_method', new PropertyCollection([
            new Property('salesChannelId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('paymentMethodId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('salesChannel', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'sales_channel',
                'referenceField' => 'id',
                'localField' => 'salesChannelId',
                'relation' => 'many_to_one',
            ]),
            new Property('paymentMethod', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'payment_method',
                'referenceField' => 'id',
                'localField' => 'paymentMethodId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}
