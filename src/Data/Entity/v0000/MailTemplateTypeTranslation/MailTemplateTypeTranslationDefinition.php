<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\MailTemplateTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Schema\PropertyCollection;
use Vin\ShopwareSdk\Data\Schema\FlagCollection;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\Flag;
use Vin\ShopwareSdk\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateTypeTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'mail_template_type_translation';

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getEntityClass(): string
    {
        return MailTemplateTypeTranslationEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return MailTemplateTypeTranslationCollection::class;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('mail_template_type_translation', new PropertyCollection([
            new Property('name', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1)]), []),
            new Property('customFields', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('mailTemplateTypeId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('languageId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('mailTemplateType', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'mail_template_type',
                'referenceField' => 'id',
                'localField' => 'mailTemplateTypeId',
                'relation' => 'many_to_one',
            ]),
            new Property('language', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'language',
                'referenceField' => 'id',
                'localField' => 'languageId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}
