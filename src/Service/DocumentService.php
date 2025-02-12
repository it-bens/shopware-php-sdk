<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Api\ApiServiceInterface;
use Vin\ShopwareSdk\Service\Struct\DocumentGenerateOperationCollection;

final readonly class DocumentService implements DocumentServiceInterface
{
    private const string CREATE_ENDPOINT = '/api/_action/order/document/%s/create';

    private const string DOWNLOAD_ENDPOINT = '/api/_action/document/%s/%s';

    private const string DOWNLOADS_ENDPOINT = '/api/_action/order/document/download';

    private const string UPLOAD_ENDPOINT = '/api/_action/document/%s/upload';

    public function __construct(
        private ApiServiceInterface $apiService,
    ) {
    }

    #[\Override]
    public function createDocument(string $documentTypeName, DocumentGenerateOperationCollection $operations): ApiResponse
    {
        $endpoint = sprintf(self::CREATE_ENDPOINT, $documentTypeName);

        return $this->apiService->post($endpoint, data: $operations->parse());
    }

    #[\Override]
    public function downloadDocument(string $documentId, string $deepLinkCode, bool $forceDownload = false): ApiResponse
    {
        $endpoint = sprintf(self::DOWNLOAD_ENDPOINT, $documentId, $deepLinkCode);
        $params = [
            'download' => $forceDownload,
        ];

        return $this->apiService->get($endpoint, $params);
    }

    #[\Override]
    public function downloadDocuments(array $documentIds, bool $forceDownload = false): ApiResponse
    {
        $data = [
            'documentIds' => $documentIds,
        ];
        $params = [
            'download' => $forceDownload,
        ];

        return $this->apiService->post(self::DOWNLOADS_ENDPOINT, $params, $data);
    }

    #[\Override]
    public function uploadDocumentById(string $documentId, $data, ?string $fileName = null): ApiResponse
    {
        $endpoint = sprintf(self::UPLOAD_ENDPOINT, $documentId);
        $params = $this->buildUploadParams($documentId, $fileName);

        return $this->apiService->postMediaFile($endpoint, $params, $data);
    }

    #[\Override]
    public function uploadDocumentFromUrl(string $documentId, string $url, ?string $fileName = null): ApiResponse
    {
        $data = [
            'url' => $url,
        ];
        $endpoint = sprintf(self::UPLOAD_ENDPOINT, $documentId);
        $params = $this->buildUploadParams($documentId, $fileName);

        return $this->apiService->post($endpoint, $params, $data);
    }

    private function buildUploadParams(string $documentId, ?string $fileName): array
    {
        $fileName ??= $documentId;

        return [
            'fileName' => $fileName,
        ];
    }
}
