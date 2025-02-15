<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Data\Schema\SchemaCollection;
use Vin\ShopwareSdk\Service\Api\ApiServiceInterface;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;

final class InfoService implements InfoServiceInterface
{
    private const string SCHEMA_PATH = '/api/_info/entity-schema.json';

    private const string EVENTS_PATH = '/api/_info/events.json';

    private const string CONFIG_PATH = '/api/_info/config';

    private const string VERSION_PATH = '/api/_info/version';

    private const string INFO_PATH = '/api/_info/openapi3.json';

    private const string OPEN_API_SCHEMA = '/api/_info/open-api-schema.json';

    private const string SCHEMA_FILE_PATH = __DIR__ . '/../Resources/entity-schema_0.0.0.0.json';

    private ?SchemaCollection $schema = null;

    private array $cache = [];

    public function __construct(
        private readonly ApiServiceInterface $apiService,
    ) {
    }

    #[\Override]
    public function fetchRawSchema(): ApiResponse
    {
        return $this->apiService->get(self::SCHEMA_PATH);
    }

    #[\Override]
    public function getConfig(): ApiResponse
    {
        return $this->apiService->get(self::CONFIG_PATH);
    }

    #[\Override]
    public function getEvents(): ApiResponse
    {
        return $this->apiService->get(self::EVENTS_PATH);
    }

    #[\Override]
    public function getInfo(): ApiResponse
    {
        return $this->apiService->get(self::INFO_PATH);
    }

    #[\Override]
    public function getOpenApiSchema(): ApiResponse
    {
        return $this->apiService->get(self::OPEN_API_SCHEMA);
    }

    #[\Override]
    public function getSchema(string $entity): ?Schema
    {
        if (array_key_exists($entity, $this->cache)) {
            return $this->cache[$entity];
        }

        if ($this->schema instanceof SchemaCollection) {
            return $this->schema->get($entity);
        }

        /** @var string|false $localSchema */
        $localSchema = file_get_contents(self::SCHEMA_FILE_PATH);

        if (is_bool($localSchema) && $localSchema === false) {
            $this->schema = $this->refreshSchema();
        }

        if (is_string($localSchema)) {
            $decodedResponse = \json_decode($localSchema, true) ?? [];
            $this->schema = $this->parseSchema($decodedResponse);
        }

        return $this->cache[$entity] = $this->schema->get($entity);
    }

    #[\Override]
    public function getShopwareVersion(): string
    {
        $apiResponse = $this->apiService->get(self::VERSION_PATH);

        return $apiResponse->getContents()['version'];
    }

    #[\Override]
    public function parseSchema(array $schema): SchemaCollection
    {
        $schemaCollection = [];

        foreach ($schema as $keySchema => $item) {
            $schemaCollection[$keySchema] = Schema::createFromRaw($item['entity'], $item['properties']);
        }

        return new SchemaCollection($schemaCollection);
    }

    #[\Override]
    public function refreshSchema(bool $persist = true): SchemaCollection
    {
        $this->cache = [];
        $this->schema = null;

        $rawSchema = $this->fetchRawSchema();

        if ($persist) {
            \file_put_contents(self::SCHEMA_FILE_PATH, json_encode($rawSchema->getContents()));
        }

        return $this->parseSchema($rawSchema->getContents());
    }
}
