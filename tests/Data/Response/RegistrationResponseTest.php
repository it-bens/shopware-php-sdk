<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Data\Response;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Vin\ShopwareSdk\Data\Response\RegistrationResponse;
use Vin\ShopwareSdk\Data\Webhook\Shop;
use Vin\ShopwareSdk\Data\Webhook\ShopRegistrationResult;

#[CoversClass(\Vin\ShopwareSdk\Data\Response\RegistrationResponse::class)]
class RegistrationResponseTest extends TestCase
{
    public function testResponse(): void
    {
        $proof = 'proof';
        $shop = new Shop('shopId', 'shopSecret');

        $result = new ShopRegistrationResult($proof, $shop);
        $confirmationUrl = 'http://app.test/confirmation-url';
        $response = new RegistrationResponse($result, $confirmationUrl);

        $this->assertInstanceOf(ResponseInterface::class, $response);
        $jsonResponse = json_decode($response->getBody()->__toString(), true);

        $this->assertNotEmpty($jsonResponse);
        $this->assertSame([
            'proof' => $proof,
            'secret' => $shop->getShopSecret(),
            'confirmation_url' => $confirmationUrl,
        ], $jsonResponse);
        $this->assertSame(200, $response->getStatusCode());
    }
}
