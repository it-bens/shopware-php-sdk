<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\CategoryTag;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\Category\CategoryEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CategoryTagEntity extends Entity
{
    public ?string $categoryId = null;

    public ?string $categoryVersionId = null;

    public ?string $tagId = null;

    public ?CategoryEntity $category = null;

    public ?TagEntity $tag = null;
}
