<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Repository;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Context\ContextBuilder;
use Vin\ShopwareSdk\Context\ContextBuilderFactoryInterface;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductDefinition;
use Vin\ShopwareSdk\Data\Uuid\Uuid;
use Vin\ShopwareSdk\Http\HttpClientInterface;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Http\Struct\MediaType;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;
use Vin\ShopwareSdk\Repository\EntityRepository;
use Vin\ShopwareSdk\Repository\Struct\CloneBehaviour;
use Vin\ShopwareSdk\Repository\Struct\VersionResponse;
use Vin\ShopwareSdkTest\Auth\AccessTokenProvider\MockAccessTokenProvider;

#[CoversClass(EntityRepository::class)]
final class EntityRepositoryTest extends TestCase
{
    public static function cloneProvider(): \Generator
    {
        $entityDefinition = new ProductDefinition();
        $hydrator = self::createStub(HydratorInterface::class);

        $id = Uuid::randomHex();
        $newId = Uuid::randomHex();

        yield 'with clone behaviour' => [
            $entityDefinition,
            $hydrator,
            self::createContextBuilderFactory(),
            $id,
            new CloneBehaviour(),
            '/api/_action/clone/' . $entityDefinition->getEntityName() . '/' . $id,
            (new CloneBehaviour())->jsonSerialize(),
            $newId,
        ];

        yield 'without clone behaviour' => [
            $entityDefinition,
            $hydrator,
            self::createContextBuilderFactory(),
            $id,
            null,
            '/api/_action/clone/' . $entityDefinition->getEntityName() . '/' . $id,
            [],
            $newId,
        ];
    }

    #[DataProvider('cloneProvider')]
    public function testClone(
        EntityDefinition $entityDefinition,
        HydratorInterface $hydrator,
        ContextBuilderFactoryInterface $contextBuilderFactory,
        string $id,
        ?CloneBehaviour $cloneBehaviour,
        string $expectedPath,
        array $expectedData,
        string $expectedNewId
    ): void {
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->once())
            ->method('post')
            ->willReturnCallback(function (string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context) use ($expectedPath, $expectedData, $expectedNewId): ApiResponse {
                $this->assertSame($expectedPath, $path);
                $this->assertSame(MediaType::APPLICATION_JSON, $contentTypeHeader);
                $this->assertSame(MediaType::APPLICATION_JSON_API, $acceptHeader);
                $this->assertEquals($expectedData, $data);
                $this->assertInstanceOf(Context::class, $context);

                $response = $this->createStub(ApiResponse::class);
                $response->method('getContents')
                    ->willReturn([
                        'id' => $expectedNewId,
                    ]);

                return $response;
            });

        $entityRepository = new EntityRepository($entityDefinition, $contextBuilderFactory, $httpClient, $hydrator);

        $this->assertSame($expectedNewId, $entityRepository->clone($id, $cloneBehaviour));
    }

    public static function createProvider(): \Generator
    {
        $entityDefinition = new ProductDefinition();
        $hydrator = self::createStub(HydratorInterface::class);

        yield [
            $entityDefinition,
            $hydrator,
            self::createContextBuilderFactory(),
            '/api/product/',
            [
                'name' => 'Test Product',
            ],
        ];
    }

    #[DataProvider('createProvider')]
    public function testCreate(
        EntityDefinition $entityDefinition,
        HydratorInterface $hydrator,
        ContextBuilderFactoryInterface $contextBuilderFactory,
        string $expectedPath,
        array $expectedData,
    ): void {
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->once())
            ->method('post')
            ->willReturnCallback(function (string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context) use ($expectedPath, $expectedData): ApiResponse {
                $this->assertSame($expectedPath, $path);
                $this->assertSame(MediaType::APPLICATION_JSON, $contentTypeHeader);
                $this->assertSame(MediaType::APPLICATION_JSON_API, $acceptHeader);
                $this->assertEquals($expectedData, $data);
                $this->assertInstanceOf(Context::class, $context);

                return $this->createStub(ApiResponse::class);
            });

        $entityRepository = new EntityRepository($entityDefinition, $contextBuilderFactory, $httpClient, $hydrator);
        $entityRepository->create($expectedData);
    }

    public static function createNewProvider(): \Generator
    {
        $entityRepository = new EntityRepository(
            new ProductDefinition(),
            self::createContextBuilderFactory(),
            self::createStub(HttpClientInterface::class),
            self::createStub(HydratorInterface::class)
        );

        yield [
            $entityRepository,
            [
                'name' => 'Test Product',
            ],
        ];
    }

    #[DataProvider('createNewProvider')]
    public function testCreateNew(EntityRepository $entityRepository, array $data): void
    {
        $entity = $entityRepository->createNew($data);
        /** @var class-string<Entity> $expectedEntityClass */
        $expectedEntityClass = $entityRepository->getDefinition()
            ->getEntityClass();

        $this->assertInstanceOf($expectedEntityClass, $entity);
        $this->assertSame($entityRepository->getDefinition()->getEntityName(), $entity->getEntityName());
    }

    public static function createVersionProvider(): \Generator
    {
        $entityDefinition = new ProductDefinition();
        $hydrator = self::createStub(HydratorInterface::class);
        $contextBuilderFactory = self::createContextBuilderFactory();

        $id = Uuid::randomHex();

        yield 'without version ID / without version name' => [
            $entityDefinition,
            $hydrator,
            $contextBuilderFactory,
            $id,
            null,
            null,
            '/api/_action/version/product/' . $id,
            [
                'versionId' => Uuid::randomHex(),
                'versionName' => 'Test Version',
                'id' => $id,
                'entity' => $entityDefinition->getEntityName(),
                'extensions' => [],
            ],
        ];

        $versionId = Uuid::randomHex();
        $versionName = 'Test Version';
        yield 'with version ID / with version name' => [
            $entityDefinition,
            $hydrator,
            $contextBuilderFactory,
            $id,
            $versionId,
            $versionName,
            '/api/_action/version/product/' . $id,
            [
                'versionId' => $versionId,
                'versionName' => $versionName,
                'id' => $id,
                'entity' => $entityDefinition->getEntityName(),
                'extensions' => [],
            ],
        ];
    }

    #[DataProvider('createVersionProvider')]
    public function testCreateVersion(
        EntityDefinition $entityDefinition,
        HydratorInterface $hydrator,
        ContextBuilderFactoryInterface $contextBuilderFactory,
        string $id,
        ?string $versionId,
        ?string $versionName,
        string $expectedPath,
        array $expectedData,
    ): void {
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->once())
            ->method('post')
            ->willReturnCallback(function (string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context) use ($expectedPath, $versionId, $versionName, $expectedData): ApiResponse {
                $this->assertSame($expectedPath, $path);
                $this->assertSame(MediaType::APPLICATION_JSON, $contentTypeHeader);
                $this->assertSame(MediaType::APPLICATION_JSON_API, $acceptHeader);

                if ($versionId !== null) {
                    $this->assertSame($versionId, $data['versionId']);
                }

                if ($versionName !== null) {
                    $this->assertSame($versionName, $data['versionName']);
                }

                $this->assertInstanceOf(Context::class, $context);

                $response = $this->createStub(ApiResponse::class);
                $response->method('getContents')
                    ->willReturn($expectedData);

                return $response;
            });

        $entityRepository = new EntityRepository($entityDefinition, $contextBuilderFactory, $httpClient, $hydrator);
        $response = $entityRepository->createVersion($id, $versionId, $versionName);
        $this->assertInstanceOf(VersionResponse::class, $response);
        $this->assertEquals($expectedData, $response->jsonSerialize());
    }

    public static function deleteProvider(): \Generator
    {
        $id = Uuid::randomHex();

        yield [
            new ProductDefinition(),
            self::createStub(HydratorInterface::class),
            self::createContextBuilderFactory(),
            $id,
            '/api/product/' . $id,
        ];
    }

    #[DataProvider('deleteProvider')]
    public function testDelete(
        EntityDefinition $entityDefinition,
        HydratorInterface $hydrator,
        ContextBuilderFactoryInterface $contextBuilderFactory,
        string $id,
        string $expectedPath,
    ): void {
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->once())
            ->method('delete')
            ->willReturnCallback(function (string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context) use ($expectedPath): ApiResponse {
                $this->assertSame($expectedPath, $path);
                $this->assertSame(MediaType::APPLICATION_JSON, $contentTypeHeader);
                $this->assertSame(MediaType::APPLICATION_JSON_API, $acceptHeader);
                $this->assertInstanceOf(Context::class, $context);

                return $this->createStub(ApiResponse::class);
            });

        $entityRepository = new EntityRepository($entityDefinition, $contextBuilderFactory, $httpClient, $hydrator);
        $entityRepository->delete($id);
    }

    public static function deleteVersionProvider(): \Generator
    {
        $id = Uuid::randomHex();
        $versionId = Uuid::randomHex();

        yield [
            new ProductDefinition(),
            self::createStub(HydratorInterface::class),
            self::createContextBuilderFactory(),
            $id,
            $versionId,
            '/api/_action/version/' . $versionId . '/product/' . $id,
        ];
    }

    #[DataProvider('deleteVersionProvider')]
    public function testDeleteVersion(
        EntityDefinition $entityDefinition,
        HydratorInterface $hydrator,
        ContextBuilderFactoryInterface $contextBuilderFactory,
        string $id,
        string $versionId,
        string $expectedPath,
    ): void {
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->once())
            ->method('post')
            ->willReturnCallback(function (string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context) use ($expectedPath): ApiResponse {
                $this->assertSame($expectedPath, $path);
                $this->assertSame(MediaType::APPLICATION_JSON, $contentTypeHeader);
                $this->assertSame(MediaType::APPLICATION_JSON_API, $acceptHeader);
                $this->assertEmpty($data);
                $this->assertInstanceOf(Context::class, $context);

                return $this->createStub(ApiResponse::class);
            });

        $entityRepository = new EntityRepository($entityDefinition, $contextBuilderFactory, $httpClient, $hydrator);
        $entityRepository->deleteVersion($id, $versionId);
    }

    public static function getProvider(): \Generator
    {
        yield [
            new ProductDefinition(),
            self::createStub(HydratorInterface::class),
            self::createContextBuilderFactory(),
            Uuid::randomHex(),
            '/api/search/product',
        ];
    }

    #[DataProvider('getProvider')]
    public function testGet(
        EntityDefinition $entityDefinition,
        HydratorInterface $hydrator,
        ContextBuilderFactoryInterface $contextBuilderFactory,
        string $id,
        string $expectedPath,
    ): void {
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->once())
            ->method('post')
            ->willReturnCallback(function (string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, array $criteria, Context $context) use ($expectedPath, $id): ApiResponse {
                $this->assertSame($expectedPath, $path);
                $this->assertSame(MediaType::APPLICATION_JSON, $contentTypeHeader);
                $this->assertSame(MediaType::APPLICATION_JSON_API, $acceptHeader);
                $this->assertSame($id, $criteria['ids']);
                $this->assertInstanceOf(Context::class, $context);

                $response = $this->createStub(ApiResponse::class);
                $response->method('getContents')
                    ->willReturn([
                        'data' => [
                            [
                                'id' => $id,
                            ],
                        ],
                        'aggregations' => [],
                        'meta' => [
                            'total' => 1,
                            'totalCountMode' => Criteria::TOTAL_COUNT_MODE_EXACT,
                        ],
                    ]);

                return $response;
            });

        $entityRepository = new EntityRepository($entityDefinition, $contextBuilderFactory, $httpClient, $hydrator);
        $entityRepository->get($id, new Criteria());
    }

    public static function getDefinitionProvider(): \Generator
    {
        $entityDefinition = new ProductDefinition();
        $entityRepository = new EntityRepository(
            $entityDefinition,
            self::createContextBuilderFactory(),
            self::createStub(HttpClientInterface::class),
            self::createStub(HydratorInterface::class)
        );

        yield [
            $entityRepository,
            $entityDefinition,
        ];
    }

    #[DataProvider('getDefinitionProvider')]
    public function testGetDefinition(
        EntityRepository $entityRepository,
        EntityDefinition $expectedEntityDefinition
    ): void {
        $this->assertEquals($expectedEntityDefinition, $entityRepository->getDefinition());
    }

    public static function mergeVersionProvider(): \Generator
    {
        $versionId = Uuid::randomHex();

        yield [
            new ProductDefinition(),
            self::createStub(HydratorInterface::class),
            self::createContextBuilderFactory(),
            $versionId,
            '/api/_action/version/merge/product/' . $versionId,
        ];
    }

    #[DataProvider('mergeVersionProvider')]
    public function testMergeVersion(
        EntityDefinition $entityDefinition,
        HydratorInterface $hydrator,
        ContextBuilderFactoryInterface $contextBuilderFactory,
        string $versionId,
        string $expectedPath
    ): void {
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->once())
            ->method('post')
            ->willReturnCallback(function (string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context) use ($versionId, $expectedPath): ApiResponse {
                $this->assertSame($expectedPath, $path);
                $this->assertSame(MediaType::APPLICATION_JSON, $contentTypeHeader);
                $this->assertSame(MediaType::APPLICATION_JSON_API, $acceptHeader);
                $this->assertEmpty($data);
                $this->assertSame($versionId, $context->additionalHeaders['sw-version-id']);

                return $this->createStub(ApiResponse::class);
            });

        $entityRepository = new EntityRepository($entityDefinition, $contextBuilderFactory, $httpClient, $hydrator);
        $entityRepository->mergeVersion($versionId);
    }

    public static function searchProvider(): \Generator
    {
        $criteria = new Criteria();
        $criteria->setLimit(10);

        yield [
            new ProductDefinition(),
            self::createStub(HydratorInterface::class),
            self::createContextBuilderFactory(),
            $criteria,
            '/api/search/product',
        ];
    }

    #[DataProvider('searchProvider')]
    public function testSearch(
        EntityDefinition $entityDefinition,
        HydratorInterface $hydrator,
        ContextBuilderFactoryInterface $contextBuilderFactory,
        Criteria $criteria,
        string $expectedPath
    ): void {
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->once())
            ->method('post')
            ->willReturnCallback(function (string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context) use ($criteria, $expectedPath): ApiResponse {
                $this->assertSame($expectedPath, $path);
                $this->assertSame(MediaType::APPLICATION_JSON, $contentTypeHeader);
                $this->assertSame(MediaType::APPLICATION_JSON_API, $acceptHeader);
                $this->assertEquals($criteria->parse(), $data);
                $this->assertInstanceOf(Context::class, $context);

                $response = $this->createStub(ApiResponse::class);
                $response->method('getContents')
                    ->willReturn([
                        'data' => [],
                        'aggregations' => [],
                        'meta' => [
                            'total' => 0,
                            'totalCountMode' => Criteria::TOTAL_COUNT_MODE_EXACT,
                        ],
                    ]);

                return $response;
            });

        $entityRepository = new EntityRepository($entityDefinition, $contextBuilderFactory, $httpClient, $hydrator);
        $entityRepository->search($criteria);
    }

    public static function searchIdsProvider(): \Generator
    {
        $criteria = new Criteria();
        $criteria->setLimit(10);

        yield [
            new ProductDefinition(),
            self::createStub(HydratorInterface::class),
            self::createContextBuilderFactory(),
            $criteria,
            '/api/search-ids/product',
        ];
    }

    #[DataProvider('searchIdsProvider')]
    public function testSearchIds(
        EntityDefinition $entityDefinition,
        HydratorInterface $hydrator,
        ContextBuilderFactoryInterface $contextBuilderFactory,
        Criteria $criteria,
        string $expectedPath
    ): void {
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->once())
            ->method('post')
            ->willReturnCallback(function (string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context) use ($criteria, $expectedPath): ApiResponse {
                $this->assertSame($expectedPath, $path);
                $this->assertSame(MediaType::APPLICATION_JSON, $contentTypeHeader);
                $this->assertSame(MediaType::APPLICATION_JSON_API, $acceptHeader);
                $this->assertEquals($criteria->parse(), $data);
                $this->assertInstanceOf(Context::class, $context);

                $response = $this->createStub(ApiResponse::class);
                $response->method('getContents')
                    ->willReturn([
                        'total' => 0,
                        'data' => [],
                    ]);

                return $response;
            });

        $entityRepository = new EntityRepository($entityDefinition, $contextBuilderFactory, $httpClient, $hydrator);
        $entityRepository->searchIds($criteria);
    }

    public static function updateWithIdProvider(): \Generator
    {
        $id = Uuid::randomHex();

        yield [
            new ProductDefinition(),
            self::createStub(HydratorInterface::class),
            self::createContextBuilderFactory(),
            $id,
            '/api/product/' . $id,
            [
                'id' => $id,
                'name' => 'Test Product',
            ],
        ];
    }

    #[DataProvider('updateWithIdProvider')]
    public function testUpdateWithId(
        EntityDefinition $entityDefinition,
        HydratorInterface $hydrator,
        ContextBuilderFactoryInterface $contextBuilderFactory,
        string $id,
        string $expectedPath,
        array $expectedData
    ): void {
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->once())
            ->method('patch')
            ->willReturnCallback(function (string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context) use ($expectedPath, $expectedData): ApiResponse {
                $this->assertSame($expectedPath, $path);
                $this->assertSame(MediaType::APPLICATION_JSON, $contentTypeHeader);
                $this->assertSame(MediaType::APPLICATION_JSON_API, $acceptHeader);
                $this->assertEquals($expectedData, $data);
                $this->assertInstanceOf(Context::class, $context);

                return $this->createStub(ApiResponse::class);
            });

        $entityRepository = new EntityRepository($entityDefinition, $contextBuilderFactory, $httpClient, $hydrator);
        $entityRepository->update($id, $expectedData);
    }

    public static function updateWithoutIdProvider(): \Generator
    {
        $id = Uuid::randomHex();

        yield [
            new EntityRepository(
                new ProductDefinition(),
                self::createContextBuilderFactory(),
                self::createStub(HttpClientInterface::class),
                self::createStub(HydratorInterface::class)
            ),
            $id,
        ];
    }

    #[DataProvider('updateWithoutIdProvider')]
    public function testUpdateWithoutId(
        EntityRepository $entityRepository,
        string $id
    ): void {
        $this->expectException(\InvalidArgumentException::class);
        $entityRepository->update($id, []);
    }

    private static function createContextBuilderFactory(): ContextBuilderFactoryInterface
    {
        $accessToken = new AccessToken('');
        $accessTokenProvider = new MockAccessTokenProvider($accessToken);
        $contextBuilder = new ContextBuilder('', $accessTokenProvider);

        $contextBuilderFactory = self::createStub(ContextBuilderFactoryInterface::class);
        $contextBuilderFactory->method('createContextBuilder')
            ->willReturn($contextBuilder);

        return $contextBuilderFactory;
    }
}
