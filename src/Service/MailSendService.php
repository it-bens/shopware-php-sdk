<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Mail\Mail;
use Vin\ShopwareSdk\Service\Api\ApiServiceInterface;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;

final readonly class MailSendService implements MailSendServiceInterface
{
    private const string BUILD_PATH = '/api/_action/mail-template/build';

    private const string SEND_PATH = '/api/_action/mail-template/send';

    public function __construct(
        private ApiServiceInterface $apiService,
    ) {
    }

    #[\Override]
    public function build(string $content, array $templateData, array $additionalHeaders = []): ApiResponse
    {
        $data = [
            'mailTemplate' => [
                'contentHtml' => $content,
            ],
            'mailTemplateType' => [
                'templateData' => $templateData,
            ],
        ];

        return $this->apiService->post(self::BUILD_PATH, data: $data, additionalHeaders: $additionalHeaders);
    }

    #[\Override]
    public function send(Mail $mail, array $additionalHeaders = []): ApiResponse
    {
        $data = array_filter($mail->jsonSerialize());

        return $this->apiService->post(self::SEND_PATH, data: $data, additionalHeaders: $additionalHeaders);
    }
}
