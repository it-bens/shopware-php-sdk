<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Context;

use Vin\ShopwareSdk\Auth\AccessTokenProvider;

final readonly class ContextBuilderFactory implements ContextBuilderFactoryInterface
{
    public function __construct(
        private string $shopUrl,
        private AccessTokenProvider $accessTokenProvider
    ) {
    }

    public function createContextBuilder(): ContextBuilder
    {
        return new ContextBuilder($this->shopUrl, $this->accessTokenProvider);
    }
}
