<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Service\Api\ApiServiceInterface;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\Config;
use Vin\ShopwareSdk\Service\Struct\ConfigCollection;

final readonly class UserConfigService implements UserConfigServiceInterface
{
    private const string USER_CONFIG_ENDPOINT = '/api/_info/config-me';

    public function __construct(
        private ApiServiceInterface $apiService,
    ) {
    }

    #[\Override]
    public function getConfigMe(array $keys, array $additionalHeaders = []): ConfigCollection
    {
        $params = [
            'keys' => $keys,
        ];

        $apiResponse = $this->apiService->get(self::USER_CONFIG_ENDPOINT, $params, additionalHeaders: $additionalHeaders);

        $collection = new ConfigCollection();
        foreach ($apiResponse->getContents()['data'] ?? [] as $key => $value) {
            $collection->add(new Config($key, $value));
        }

        return $collection;
    }

    #[\Override]
    public function saveConfigMe(ConfigCollection $configs, array $additionalHeaders = []): ApiResponse
    {
        return $this->apiService->post(self::USER_CONFIG_ENDPOINT, data: $configs->parse(), additionalHeaders: $additionalHeaders);
    }
}
