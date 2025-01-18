<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Repository;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Context\ContextBuilderFactoryInterface;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductDefinition;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Http\HttpClientInterface;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;
use Vin\ShopwareSdk\Repository\RepositoryProvider;

final class RepositoryProviderTest extends TestCase
{
    public static function getRepositoryProvider(): \Generator
    {
        $contextBuilderFactory = self::createStub(ContextBuilderFactoryInterface::class);
        $httpClient = self::createStub(HttpClientInterface::class);
        $entityHydrator = self::createStub(HydratorInterface::class);

        yield [$contextBuilderFactory, $httpClient, $entityHydrator];
    }

    #[DataProvider('getRepositoryProvider')]
    public function testGetRepository(
        ContextBuilderFactoryInterface $contextBuilderFactory,
        HttpClientInterface $httpClient,
        HydratorInterface $entityHydrator
    ): void {
        $entityName = ProductDefinition::ENTITY_NAME;

        $definitionProvider = $this->createMock(DefinitionProviderInterface::class);
        $definitionProvider->expects($this->once())
            ->method('getDefinition')
            ->willReturnCallback(function (string $entityName) {
                $this->assertEquals(ProductDefinition::ENTITY_NAME, $entityName);

                return new ProductDefinition();
            });

        $repositoryProvider = new RepositoryProvider($definitionProvider, $contextBuilderFactory, $httpClient, $entityHydrator);

        $entityRepository = $repositoryProvider->getRepository($entityName);
        $this->assertEquals($entityName, $entityRepository->getDefinition()->getEntityName());

        $alreadyInitializedEntityRepository = $repositoryProvider->getRepository($entityName);
        $this->assertSame($entityRepository, $alreadyInitializedEntityRepository);
    }
}
