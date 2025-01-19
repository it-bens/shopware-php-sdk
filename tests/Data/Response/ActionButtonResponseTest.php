<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Data\Response;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Vin\ShopwareSdk\Data\Response\ActionButtonResponse;
use Vin\ShopwareSdk\Data\Response\EmptyResponse;
use Vin\ShopwareSdk\Data\Response\NotificationResponse;
use Vin\ShopwareSdk\Data\Response\OpenModalResponse;
use Vin\ShopwareSdk\Data\Response\OpenNewTabResponse;
use Vin\ShopwareSdk\Data\Response\ReloadDataResponse;

#[CoversClass(\Vin\ShopwareSdk\Data\Response\ActionButtonResponse::class)]
class ActionButtonResponseTest extends TestCase
{
    public function testEmptyResponsestEmptyResponse(): void
    {
        $response = new EmptyResponse();

        $this->assertSame(0, $response->getBody()->getSize());
        $this->assertEmpty($response->getBody()->getContents());
        $this->assertEmpty($response->getHeaders());
        $this->assertSame(204, $response->getStatusCode());
    }

    public function testNotificationResponse(): void
    {
        $appSecret = 'appSecret';
        $response = new NotificationResponse('appSecret', 'Success', 'error');
        $this->assertInstanceOf(ResponseInterface::class, $response);

        $stringResponse = $response->getBody()
            ->__toString();
        $jsonResponse = json_decode($stringResponse, true);
        $signature = hash_hmac('sha256', $stringResponse, $appSecret);

        $this->assertNotEmpty($jsonResponse);
        $this->assertNotEmpty($response->getHeaders());
        $this->assertNotEmpty($response->getHeader('shopware-app-signature'));
        $this->assertSame($signature, $response->getHeader('shopware-app-signature')[0]);
        $this->assertSame(ActionButtonResponse::ACTION_SHOW_NOTIFICATION, $jsonResponse['actionType']);
        $this->assertSame([
            'status' => 'error',
            'message' => 'Success',
        ], $jsonResponse['payload']);
        $this->assertSame(200, $response->getStatusCode());
    }

    public function testReloadDataResponse(): void
    {
        $appSecret = 'appSecret';
        $response = new ReloadDataResponse('appSecret');
        $this->assertInstanceOf(ResponseInterface::class, $response);

        $stringResponse = $response->getBody()
            ->__toString();
        $jsonResponse = json_decode($stringResponse, true);
        $signature = hash_hmac('sha256', $stringResponse, $appSecret);

        $this->assertNotEmpty($jsonResponse);
        $this->assertNotEmpty($response->getHeaders());
        $this->assertNotEmpty($response->getHeader('shopware-app-signature'));
        $this->assertSame($signature, $response->getHeader('shopware-app-signature')[0]);
        $this->assertSame(ActionButtonResponse::ACTION_RELOAD_DATA, $jsonResponse['actionType']);
        $this->assertSame([], $jsonResponse['payload']);
        $this->assertSame(200, $response->getStatusCode());
    }

    public function testOpenModalResponse(): void
    {
        $appSecret = 'appSecret';
        $response = new OpenModalResponse('appSecret', 'http://shopware.test');
        $this->assertInstanceOf(ResponseInterface::class, $response);

        $stringResponse = $response->getBody()
            ->__toString();
        $jsonResponse = json_decode($stringResponse, true);
        $signature = hash_hmac('sha256', $stringResponse, $appSecret);

        $this->assertNotEmpty($jsonResponse);
        $this->assertNotEmpty($response->getHeaders());
        $this->assertNotEmpty($response->getHeader('shopware-app-signature'));
        $this->assertSame($signature, $response->getHeader('shopware-app-signature')[0]);
        $this->assertSame(ActionButtonResponse::ACTION_OPEN_MODAL, $jsonResponse['actionType']);
        $this->assertEquals([
            'iframeUrl' => 'http://shopware.test',
            'size' => OpenModalResponse::LARGE_SIZE,
            'expand' => false,
        ], $jsonResponse['payload']);
        $this->assertSame(200, $response->getStatusCode());
    }

    public function testOpenNewTabResponse(): void
    {
        $appSecret = 'appSecret';
        $response = new OpenNewTabResponse('appSecret', 'https://google.com');
        $this->assertInstanceOf(ResponseInterface::class, $response);

        $stringResponse = $response->getBody()
            ->__toString();
        $jsonResponse = json_decode($stringResponse, true);
        $signature = hash_hmac('sha256', $stringResponse, $appSecret);

        $this->assertNotEmpty($jsonResponse);
        $this->assertNotEmpty($response->getHeaders());
        $this->assertNotEmpty($response->getHeader('shopware-app-signature'));
        $this->assertSame($signature, $response->getHeader('shopware-app-signature')[0]);
        $this->assertSame(ActionButtonResponse::ACTION_OPEN_NEW_TAB, $jsonResponse['actionType']);
        $this->assertSame([
            'redirectUrl' => 'https://google.com',
        ], $jsonResponse['payload']);
        $this->assertSame(200, $response->getStatusCode());
    }
}
