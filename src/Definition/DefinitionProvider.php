<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Exception\DefinitionNotFoundException;

final readonly class DefinitionProvider implements DefinitionProviderInterface
{
    private DefinitionCollection $definitionCollection;

    /**
     * @param iterable<DefinitionCollectionPopulator> $definitionCollectionPopulators
     */
    public function __construct(
        private iterable $definitionCollectionPopulators,
        private string $shopwareVersion
    ) {
        $this->definitionCollection = new DefinitionCollection();
        foreach ($this->definitionCollectionPopulators as $definitionCollectionPopulator) {
            $definitionCollectionPopulator->populateDefinitionCollection($this->definitionCollection, $this->shopwareVersion);
        }
    }

    public function getDefinition(string $entityName): EntityDefinition
    {
        return $this->definitionCollection->get($entityName) ?? throw new DefinitionNotFoundException($entityName);
    }
}
