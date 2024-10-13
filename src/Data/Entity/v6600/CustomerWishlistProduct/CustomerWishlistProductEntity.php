<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\CustomerWishlistProduct;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\CustomerWishlist\CustomerWishlistEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\Product\ProductEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerWishlistProductEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $wishlistId = null;

    public ?CustomerWishlistEntity $wishlist = null;

    public ?ProductEntity $product = null;
}
