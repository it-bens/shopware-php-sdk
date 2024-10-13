<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\Language;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\AppActionButtonTranslation\AppActionButtonTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\AppCmsBlockTranslation\AppCmsBlockTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\AppFlowActionTranslation\AppFlowActionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\AppScriptConditionTranslation\AppScriptConditionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\AppTranslation\AppTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\CategoryTranslation\CategoryTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\CmsPageTranslation\CmsPageTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\CmsSlotTranslation\CmsSlotTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\CountryStateTranslation\CountryStateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\CountryTranslation\CountryTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\CurrencyTranslation\CurrencyTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\Customer\CustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\CustomerGroupTranslation\CustomerGroupTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\DeliveryTimeTranslation\DeliveryTimeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\DocumentTypeTranslation\DocumentTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ImportExportProfileTranslation\ImportExportProfileTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\LandingPageTranslation\LandingPageTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\Locale\LocaleEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\LocaleTranslation\LocaleTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\MailHeaderFooterTranslation\MailHeaderFooterTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\MailTemplateTranslation\MailTemplateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\MediaTranslation\MediaTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\NewsletterRecipient\NewsletterRecipientCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\NumberRangeTranslation\NumberRangeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\Order\OrderCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PluginTranslation\PluginTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductCrossSellingTranslation\ProductCrossSellingTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductKeywordDictionary\ProductKeywordDictionaryCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductReview\ProductReviewCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductSearchConfig\ProductSearchConfigEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductSearchKeyword\ProductSearchKeywordCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductSortingTranslation\ProductSortingTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductStreamTranslation\ProductStreamTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductTranslation\ProductTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PromotionTranslation\PromotionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PropertyGroupTranslation\PropertyGroupTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\SalesChannelDomain\SalesChannelDomainCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\SalesChannelTranslation\SalesChannelTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\SalesChannelTypeTranslation\SalesChannelTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\SalutationTranslation\SalutationTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\SeoUrl\SeoUrlCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\StateMachineTranslation\StateMachineTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\TaxProviderTranslation\TaxProviderTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ThemeTranslation\ThemeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\UnitTranslation\UnitTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LanguageEntity extends Entity
{
    public ?string $parentId = null;

    public ?string $localeId = null;

    public ?string $translationCodeId = null;

    public ?string $name = null;

    public ?LanguageEntity $parent = null;

    public ?LocaleEntity $locale = null;

    public ?LocaleEntity $translationCode = null;

    public ?LanguageCollection $children = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?SalesChannelDomainCollection $salesChannelDomains = null;

    public ?CustomerCollection $customers = null;

    public ?NewsletterRecipientCollection $newsletterRecipients = null;

    public ?OrderCollection $orders = null;

    public ?CategoryTranslationCollection $categoryTranslations = null;

    public ?CountryStateTranslationCollection $countryStateTranslations = null;

    public ?CountryTranslationCollection $countryTranslations = null;

    public ?CurrencyTranslationCollection $currencyTranslations = null;

    public ?CustomerGroupTranslationCollection $customerGroupTranslations = null;

    public ?LocaleTranslationCollection $localeTranslations = null;

    public ?MediaTranslationCollection $mediaTranslations = null;

    public ?PaymentMethodTranslationCollection $paymentMethodTranslations = null;

    public ?ProductManufacturerTranslationCollection $productManufacturerTranslations = null;

    public ?ProductTranslationCollection $productTranslations = null;

    public ?ShippingMethodTranslationCollection $shippingMethodTranslations = null;

    public ?UnitTranslationCollection $unitTranslations = null;

    public ?PropertyGroupTranslationCollection $propertyGroupTranslations = null;

    public ?PropertyGroupOptionTranslationCollection $propertyGroupOptionTranslations = null;

    public ?SalesChannelTranslationCollection $salesChannelTranslations = null;

    public ?SalesChannelTypeTranslationCollection $salesChannelTypeTranslations = null;

    public ?SalutationTranslationCollection $salutationTranslations = null;

    public ?PluginTranslationCollection $pluginTranslations = null;

    public ?ProductStreamTranslationCollection $productStreamTranslations = null;

    public ?StateMachineTranslationCollection $stateMachineTranslations = null;

    public ?StateMachineStateTranslationCollection $stateMachineStateTranslations = null;

    public ?CmsPageTranslationCollection $cmsPageTranslations = null;

    public ?CmsSlotTranslationCollection $cmsSlotTranslations = null;

    public ?MailTemplateTranslationCollection $mailTemplateTranslations = null;

    public ?MailHeaderFooterTranslationCollection $mailHeaderFooterTranslations = null;

    public ?DocumentTypeTranslationCollection $documentTypeTranslations = null;

    public ?NumberRangeTypeTranslationCollection $numberRangeTypeTranslations = null;

    public ?DeliveryTimeTranslationCollection $deliveryTimeTranslations = null;

    public ?ProductSearchKeywordCollection $productSearchKeywords = null;

    public ?ProductKeywordDictionaryCollection $productKeywordDictionaries = null;

    public ?MailTemplateTypeTranslationCollection $mailTemplateTypeTranslations = null;

    public ?PromotionTranslationCollection $promotionTranslations = null;

    public ?NumberRangeTranslationCollection $numberRangeTranslations = null;

    public ?ProductReviewCollection $productReviews = null;

    public ?SeoUrlCollection $seoUrlTranslations = null;

    public ?TaxRuleTypeTranslationCollection $taxRuleTypeTranslations = null;

    public ?ProductCrossSellingTranslationCollection $productCrossSellingTranslations = null;

    public ?ImportExportProfileTranslationCollection $importExportProfileTranslations = null;

    public ?ProductSortingTranslationCollection $productSortingTranslations = null;

    public ?ProductFeatureSetTranslationCollection $productFeatureSetTranslations = null;

    public ?AppTranslationCollection $appTranslations = null;

    public ?AppActionButtonTranslationCollection $actionButtonTranslations = null;

    public ?LandingPageTranslationCollection $landingPageTranslations = null;

    public ?AppCmsBlockTranslationCollection $appCmsBlockTranslations = null;

    public ?AppScriptConditionTranslationCollection $appScriptConditionTranslations = null;

    public ?ProductSearchConfigEntity $productSearchConfig = null;

    public ?AppFlowActionTranslationCollection $appFlowActionTranslations = null;

    public ?TaxProviderTranslationCollection $taxProviderTranslations = null;

    public ?ThemeTranslationCollection $themeTranslations = null;
}
