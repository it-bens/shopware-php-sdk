<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\DocumentGenerateOperationCollection;

interface DocumentServiceInterface
{
    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function createDocument(string $documentTypeName, DocumentGenerateOperationCollection $operations): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function downloadDocument(string $documentId, string $deepLinkCode, bool $forceDownload = false): ApiResponse;

    /**
     * @param string[] $documentIds
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function downloadDocuments(array $documentIds, bool $forceDownload = false): ApiResponse;

    /**
     * @param string|resource $data
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function uploadDocumentById(string $documentId, $data, ?string $fileName = null): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function uploadDocumentFromUrl(string $documentId, string $url, ?string $fileName = null): ApiResponse;
}
