<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Data\Schema\SchemaCollection;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;

interface InfoServiceInterface
{
    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function fetchRawSchema(): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function getConfig(): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function getEvents(): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function getInfo(): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function getOpenApiSchema(): ApiResponse;

    public function getSchema(string $entity): ?Schema;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function getShopwareVersion(): string;

    public function parseSchema(array $schema): SchemaCollection;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function refreshSchema(bool $persist = true): SchemaCollection;
}
