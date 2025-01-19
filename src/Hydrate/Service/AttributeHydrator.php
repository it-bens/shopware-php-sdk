<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Service;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Definition\SchemaProviderInterface;

final readonly class AttributeHydrator implements AttributeHydratorInterface
{
    public function __construct(
        private SchemaProviderInterface $schemaProvider
    ) {
    }

    #[\Override]
    public function hydrateAttributes(Entity $entity, string $entityName, array $attributes): void
    {
        $entitySchema = $this->schemaProvider->getSchema($entityName);

        foreach ($attributes as $attributeKey => $attributeValue) {
            if (! $entitySchema->properties->has($attributeKey)) {
                $entity->setProperty($attributeKey, $attributeValue);

                continue;
            }

            $field = $entitySchema->properties->get($attributeKey);
            if ($field === null) {
                continue;
            }

            if (! $field->isJsonField()) {
                $entity->setProperty($attributeKey, $attributeValue);

                continue;
            }

            if (is_array($attributeValue) && count($attributeValue) <= 0 && $field->isJsonObjectField()) {
                $entity->setProperty($attributeKey, []);

                continue;
            }

            if (empty($attributeValue) && $field->isJsonListField()) {
                $entity->setProperty($attributeKey, []);
                continue;
            }

            $entity->setProperty($attributeKey, $attributeValue);
        }
    }
}
