<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\Collection;

/**
 * @phpstan-import-type DocumentGenerateOperationData from DocumentGenerateOperation
 *
 * @method DocumentGenerateOperation[] getIterator()
 * @method DocumentGenerateOperation[] getElements()
 * @method DocumentGenerateOperation|null get(string $key)
 * @method DocumentGenerateOperation|null first()
 * @method DocumentGenerateOperation|null last()
 */
class DocumentGenerateOperationCollection extends Collection
{
    /**
     * @param DocumentGenerateOperation $element
     */
    public function add($element): void
    {
        $this->set($element->orderId, $element);
    }

    /**
     * @return array<string, DocumentGenerateOperationData>
     */
    public function parse(): array
    {
        $parsed = [];
        /** @var DocumentGenerateOperation $documentGenerateOperation */
        foreach ($this->elements as $orderId => $documentGenerateOperation) {
            $parsed[$orderId] = $documentGenerateOperation->parse();
        }

        return $parsed;
    }

    /**
     * @param DocumentGenerateOperation $element
     */
    public function set($key, $element): void
    {
        throw new \RuntimeException('Document generate operations have to be added without a key. Use `add` method instead.');
    }

    protected function getExpectedClass(): ?string
    {
        return DocumentGenerateOperation::class;
    }
}
