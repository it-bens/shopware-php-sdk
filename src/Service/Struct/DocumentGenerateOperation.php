<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\ParseAware;

/**
 * @phpstan-type DocumentGenerateOperationData array{
 *     orderId: string,
 *     fileType: string|null,
 *     config: array|null,
 *     referencedDocumentId: string|null,
 *     static: bool|null
 * }
 */
class DocumentGenerateOperation implements ParseAware
{
    public function __construct(
        public readonly string $orderId,
        private readonly ?string $fileType,
        private readonly ?array $config,
        private readonly ?string $referencedDocumentId,
        private readonly ?bool $static
    ) {
    }

    /**
     * @return DocumentGenerateOperationData
     */
    public function parse(): array
    {
        return [
            'orderId' => $this->orderId,
            'fileType' => $this->fileType,
            'config' => $this->config,
            'referencedDocumentId' => $this->referencedDocumentId,
            'static' => $this->static,
        ];
    }
}
