<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition;

interface DefinitionCollectionPopulator
{
    /**
     * @return string[]
     */
    public static function getEntityNames(string $shopwareVersion): array;

    public static function priority(): int;

    public function populateDefinitionCollection(DefinitionCollection $definitionCollection, string $shopwareVersion): void;
}
