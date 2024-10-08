<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

use Psr\Clock\ClockInterface;

class AccessToken
{
    public function __construct(
        public string $accessToken,
        public int $expiresIn = 600,
        public string $tokenType = 'Bearer',
        public ?string $refreshToken = null
    ) {
    }

    public function isExpired(ClockInterface $clock): bool
    {
        $payload = json_decode(base64_decode(explode('.', $this->accessToken)[1]), true);
        $expiresAt = $payload['exp'];

        return $expiresAt - 10 < $clock->now()
            ->getTimestamp();
    }
}
