<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\Promotion;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\Customer\CustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderLineItem\OrderLineItemCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PromotionDiscount\PromotionDiscountCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PromotionIndividualCode\PromotionIndividualCodeCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PromotionSalesChannel\PromotionSalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PromotionSetgroup\PromotionSetgroupCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PromotionTranslation\PromotionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\Rule\RuleCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionEntity extends Entity
{
    public ?string $name = null;

    public ?bool $active = null;

    public ?\DateTimeInterface $validFrom = null;

    public ?\DateTimeInterface $validUntil = null;

    public ?int $maxRedemptionsGlobal = null;

    public ?int $maxRedemptionsPerCustomer = null;

    public ?int $priority = null;

    public ?bool $exclusive = null;

    public ?string $code = null;

    public ?bool $useCodes = null;

    public ?bool $useIndividualCodes = null;

    public ?string $individualCodePattern = null;

    public ?bool $useSetGroups = null;

    public ?bool $customerRestriction = null;

    public ?bool $preventCombination = null;

    public ?int $orderCount = null;

    public ?array $ordersPerCustomerCount = null;

    public ?PromotionSetgroupCollection $setgroups = null;

    public ?PromotionSalesChannelCollection $salesChannels = null;

    public ?PromotionDiscountCollection $discounts = null;

    public ?PromotionIndividualCodeCollection $individualCodes = null;

    public ?RuleCollection $personaRules = null;

    public ?CustomerCollection $personaCustomers = null;

    public ?RuleCollection $orderRules = null;

    public ?RuleCollection $cartRules = null;

    public ?OrderLineItemCollection $orderLineItems = null;

    public ?PromotionTranslationCollection $translations = null;

    public ?array $exclusionIds = null;
}
