<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Context\ContextBuilderFactory;
use Vin\ShopwareSdk\Data\Entity\v0000\Customer\CustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\Customer\CustomerDefinition;
use Vin\ShopwareSdk\Data\Entity\v0000\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductDefinition;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductEntity;
use Vin\ShopwareSdk\Factory\RepositoryFactory;
use Vin\ShopwareSdk\Repository\EntityRepository;

/**
 * @covers \Vin\ShopwareSdk\Factory\RepositoryFactory
 */
class RepositoryFactoryTest extends TestCase
{
    private const SHOP_URL = 'http://test.com';

    private ContextBuilderFactory $contextBuilderFactory;

    protected function setUp(): void
    {
        $accessTokenProvider = new MockAccessTokenProvider();
        $this->contextBuilderFactory = new ContextBuilderFactory(self::SHOP_URL, $accessTokenProvider);
    }

    public function testCreateEntity(): void
    {
        $repository = RepositoryFactory::create(ProductDefinition::ENTITY_NAME, $this->contextBuilderFactory);

        static::assertInstanceOf(EntityRepository::class, $repository);
        static::assertInstanceOf(ProductDefinition::class, $repository->getDefinition());
        static::assertEquals('product', $repository->getDefinition()->getEntityName());
        static::assertEquals(ProductEntity::class, $repository->getDefinition()->getEntityClass());
        static::assertEquals(ProductCollection::class, $repository->getDefinition()->getEntityCollection());
    }

    public function testCreateFromCustomDefinition(): void
    {
        $repository = RepositoryFactory::createFromDefinition(new CustomerDefinition(), $this->contextBuilderFactory);

        static::assertInstanceOf(EntityRepository::class, $repository);
        static::assertInstanceOf(CustomerDefinition::class, $repository->getDefinition());
        static::assertEquals(CustomerDefinition::ENTITY_NAME, $repository->getDefinition()->getEntityName());
        static::assertEquals(CustomerEntity::class, $repository->getDefinition()->getEntityClass());
        static::assertEquals(CustomerCollection::class, $repository->getDefinition()->getEntityCollection());
    }

    public function testAllEntitiesClassesAreCreated(): void
    {
        $entityMapping = file_get_contents(__DIR__ . '/../src/Resources/entity_mapping_0.0.0.0.json');

        /** @phpstan-ignore argument.type */
        $entityMapping = json_decode($entityMapping, true);

        foreach ($entityMapping as $entity => $definition) {
            $repository = RepositoryFactory::create($entity, $this->contextBuilderFactory);

            static::assertInstanceOf(EntityRepository::class, $repository);
            static::assertInstanceOf($definition, $repository->getDefinition());
            static::assertEquals($entity, $repository->getDefinition()->getEntityName());
            static::assertTrue(is_subclass_of($repository->getDefinition()->getEntityClass(), Entity::class));
            static::assertTrue(is_subclass_of($repository->getDefinition()->getEntityCollection(), EntityCollection::class));
        }
    }
}
