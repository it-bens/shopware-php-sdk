<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Auth\AccessTokenProvider;

use Vin\ShopwareSdk\Auth\AccessTokenProvider;
use Vin\ShopwareSdk\Data\AccessToken;

final readonly class MockAccessTokenProvider implements AccessTokenProvider
{
    public function __construct(
        private AccessToken $accessToken
    ) {
    }

    public function getAccessToken(): AccessToken
    {
        return $this->accessToken;
    }
}
