<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\PaymentMethod;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\AppPaymentMethod\AppPaymentMethodEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\Customer\CustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderTransaction\OrderTransactionCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\Plugin\PluginEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\SalesChannel\SalesChannelCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PaymentMethodEntity extends Entity
{
    public ?string $pluginId = null;
    public ?string $handlerIdentifier = null;
    public ?string $name = null;
    public ?string $distinguishableName = null;
    public ?string $description = null;
    public ?int $position = null;
    public ?bool $active = null;
    public ?bool $afterOrderEnabled = null;
    public ?string $availabilityRuleId = null;
    public ?string $mediaId = null;
    public ?string $formattedHandlerIdentifier = null;
    public ?bool $synchronous = null;
    public ?bool $asynchronous = null;
    public ?bool $prepared = null;
    public ?bool $refundable = null;
    public ?bool $recurring = null;
    public ?PaymentMethodTranslationCollection $translations = null;
    public ?MediaEntity $media = null;
    public ?RuleEntity $availabilityRule = null;
    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;
    public ?PluginEntity $plugin = null;
    public ?CustomerCollection $customers = null;
    public ?OrderTransactionCollection $orderTransactions = null;
    public ?SalesChannelCollection $salesChannels = null;
    public ?AppPaymentMethodEntity $appPaymentMethod = null;
    public ?string $shortName = null;
    public ?string $technicalName = null;
}
