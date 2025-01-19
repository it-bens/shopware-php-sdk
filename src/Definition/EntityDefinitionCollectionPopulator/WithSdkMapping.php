<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition\EntityDefinitionCollectionPopulator;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Definition\DefinitionCollection;
use Vin\ShopwareSdk\Definition\DefinitionCollectionPopulator;

final class WithSdkMapping implements DefinitionCollectionPopulator
{
    #[\Override]
    public static function getEntityNames(string $shopwareVersion): array
    {
        $mapping = self::loadEntityMapping($shopwareVersion);

        return array_keys($mapping);
    }

    #[\Override]
    public static function priority(): int
    {
        return 1000;
    }

    #[\Override]
    public function populateDefinitionCollection(DefinitionCollection $definitionCollection, string $shopwareVersion): void
    {
        $mapping = self::loadEntityMapping($shopwareVersion);

        foreach ($mapping as $definitionClass) {
            if (! class_exists($definitionClass)) {
                throw new \RuntimeException(sprintf('Could not find entity definition class %s', $definitionClass));
            }

            $definitionCollection->set(new $definitionClass());
        }
    }

    /**
     * @return array<string, class-string<EntityDefinition>>
     */
    private static function loadEntityMapping(string $shopwareVersion): array
    {
        $entityMappingFileName = sprintf('entity_mapping_%s.json', $shopwareVersion);
        $entityMappingPath = __DIR__ . '/../../Resources/' . $entityMappingFileName;
        $jsonEncodedMapping = (string) file_get_contents($entityMappingPath);
        /** @var array<string, class-string<EntityDefinition>> $mapping */
        $mapping = json_decode($jsonEncodedMapping, true);

        return $mapping;
    }
}
