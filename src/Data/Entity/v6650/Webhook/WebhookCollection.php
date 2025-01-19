<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\Webhook;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void               add(WebhookEntity $entity)
 * @method void               set(WebhookEntity $entity)
 * @method WebhookEntity[]    getIterator()
 * @method WebhookEntity[]    getElements()
 * @method WebhookEntity|null get(string $key)
 * @method WebhookEntity|null first()
 * @method WebhookEntity|null last()
 */
class WebhookCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return WebhookEntity::class;
    }
}
