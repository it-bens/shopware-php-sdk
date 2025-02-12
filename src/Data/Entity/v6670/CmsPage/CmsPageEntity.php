<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6670\CmsPage;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6670\Category\CategoryCollection;
use Vin\ShopwareSdk\Data\Entity\v6670\CmsPageTranslation\CmsPageTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6670\CmsSection\CmsSectionCollection;
use Vin\ShopwareSdk\Data\Entity\v6670\LandingPage\LandingPageCollection;
use Vin\ShopwareSdk\Data\Entity\v6670\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6670\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v6670\SalesChannel\SalesChannelCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsPageEntity extends Entity
{
    public ?string $name = null;

    public ?string $type = null;

    public ?string $entity = null;

    public ?string $cssClass = null;

    public ?array $config = null;

    public ?string $previewMediaId = null;

    public ?bool $locked = null;

    public ?CmsSectionCollection $sections = null;

    public ?CmsPageTranslationCollection $translations = null;

    public ?MediaEntity $previewMedia = null;

    public ?CategoryCollection $categories = null;

    public ?LandingPageCollection $landingPages = null;

    public ?SalesChannelCollection $homeSalesChannels = null;

    public ?ProductCollection $products = null;
}
