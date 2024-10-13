<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\SalesChannel;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\Category\CategoryEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\CmsPage\CmsPageEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Country\CountryCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\Country\CountryEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Currency\CurrencyCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\Currency\CurrencyEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Customer\CustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\CustomerGroup\CustomerGroupCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\CustomerGroup\CustomerGroupEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\CustomerWishlist\CustomerWishlistCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\LandingPage\LandingPageCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\Language\LanguageCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\MailHeaderFooter\MailHeaderFooterEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\MainCategory\MainCategoryCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\NewsletterRecipient\NewsletterRecipientCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\Order\OrderCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\PaymentMethod\PaymentMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\PaymentMethod\PaymentMethodEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\ProductExport\ProductExportCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\ProductReview\ProductReviewCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\ProductVisibility\ProductVisibilityCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\PromotionSalesChannel\PromotionSalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\SalesChannelAnalytics\SalesChannelAnalyticsEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\SalesChannelDomain\SalesChannelDomainCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\SalesChannelDomain\SalesChannelDomainEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\SalesChannelTranslation\SalesChannelTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\SalesChannelType\SalesChannelTypeEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\SeoUrl\SeoUrlCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\SeoUrlTemplate\SeoUrlTemplateCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\ShippingMethod\ShippingMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\ShippingMethod\ShippingMethodEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\SystemConfig\SystemConfigCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\Theme\ThemeCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelEntity extends Entity
{
    public ?string $typeId = null;

    public ?string $languageId = null;

    public ?string $customerGroupId = null;

    public ?string $currencyId = null;

    public ?string $paymentMethodId = null;

    public ?string $shippingMethodId = null;

    public ?string $countryId = null;

    public ?string $analyticsId = null;

    public ?string $navigationCategoryId = null;

    public ?string $navigationCategoryVersionId = null;

    public ?int $navigationCategoryDepth = null;

    public ?string $footerCategoryId = null;

    public ?string $footerCategoryVersionId = null;

    public ?string $serviceCategoryId = null;

    public ?string $serviceCategoryVersionId = null;

    public ?string $mailHeaderFooterId = null;

    public ?string $hreflangDefaultDomainId = null;

    public ?string $name = null;

    public ?string $shortName = null;

    public ?string $taxCalculationType = null;

    public ?string $accessKey = null;

    public ?array $configuration = null;

    public ?bool $active = null;

    public ?bool $hreflangActive = null;

    public ?bool $maintenance = null;

    public ?array $maintenanceIpWhitelist = null;

    public ?SalesChannelTranslationCollection $translations = null;

    public ?CurrencyCollection $currencies = null;

    public ?LanguageCollection $languages = null;

    public ?CountryCollection $countries = null;

    public ?PaymentMethodCollection $paymentMethods = null;

    public ?array $paymentMethodIds = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?SalesChannelTypeEntity $type = null;

    public ?LanguageEntity $language = null;

    public ?CustomerGroupEntity $customerGroup = null;

    public ?CurrencyEntity $currency = null;

    public ?PaymentMethodEntity $paymentMethod = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?CountryEntity $country = null;

    public ?OrderCollection $orders = null;

    public ?CustomerCollection $customers = null;

    public ?string $homeCmsPageId = null;

    public ?string $homeCmsPageVersionId = null;

    public ?CmsPageEntity $homeCmsPage = null;

    public ?array $homeSlotConfig = null;

    public ?bool $homeEnabled = null;

    public ?string $homeName = null;

    public ?string $homeMetaTitle = null;

    public ?string $homeMetaDescription = null;

    public ?string $homeKeywords = null;

    public ?SalesChannelDomainCollection $domains = null;

    public ?SystemConfigCollection $systemConfigs = null;

    public ?CategoryEntity $navigationCategory = null;

    public ?CategoryEntity $footerCategory = null;

    public ?CategoryEntity $serviceCategory = null;

    public ?ProductVisibilityCollection $productVisibilities = null;

    public ?SalesChannelDomainEntity $hreflangDefaultDomain = null;

    public ?MailHeaderFooterEntity $mailHeaderFooter = null;

    public ?NewsletterRecipientCollection $newsletterRecipients = null;

    public ?NumberRangeSalesChannelCollection $numberRangeSalesChannels = null;

    public ?PromotionSalesChannelCollection $promotionSalesChannels = null;

    public ?DocumentBaseConfigSalesChannelCollection $documentBaseConfigSalesChannels = null;

    public ?ProductReviewCollection $productReviews = null;

    public ?SeoUrlCollection $seoUrls = null;

    public ?SeoUrlTemplateCollection $seoUrlTemplates = null;

    public ?MainCategoryCollection $mainCategories = null;

    public ?ProductExportCollection $productExports = null;

    public ?SalesChannelAnalyticsEntity $analytics = null;

    public ?CustomerGroupCollection $customerGroupsRegistrations = null;

    public ?LandingPageCollection $landingPages = null;

    public ?CustomerCollection $boundCustomers = null;

    public ?CustomerWishlistCollection $wishlists = null;

    public ?ThemeCollection $themes = null;
}
