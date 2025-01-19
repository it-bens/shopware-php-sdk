<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\AccessTokenFetcher;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;

final readonly class TokenRequestFactory implements TokenRequestFactoryInterface
{
    public function __construct(
        private StreamFactoryInterface $streamFactory,
        private RequestFactoryInterface $requestFactory,
    ) {
    }

    #[\Override]
    public function createRequest(string $uri, array $data): RequestInterface
    {
        /** @var string $data */
        $data = json_encode($data);
        $body = $this->streamFactory->createStream($data);

        return $this->requestFactory->createRequest('POST', $uri)
            ->withHeader('Accept', 'application/json')
            ->withHeader('Content-Type', 'application/json')
            ->withBody($body);
    }
}
