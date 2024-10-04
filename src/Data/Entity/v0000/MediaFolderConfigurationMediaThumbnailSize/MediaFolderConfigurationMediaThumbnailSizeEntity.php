<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\MediaFolderConfigurationMediaThumbnailSize;

use Vin\ShopwareSdk\Data\Entity\v0000\MediaFolderConfiguration\MediaFolderConfigurationEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\MediaThumbnailSize\MediaThumbnailSizeEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class MediaFolderConfigurationMediaThumbnailSizeEntity extends Entity
{
    public ?string $mediaFolderConfigurationId = null;

    public ?string $mediaThumbnailSizeId = null;

    public ?MediaFolderConfigurationEntity $mediaFolderConfiguration = null;

    public ?MediaThumbnailSizeEntity $mediaThumbnailSize = null;
}
