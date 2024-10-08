<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Mail\Mail;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;

interface MailSendServiceInterface
{
    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function build(string $content, array $templateData, array $additionalHeaders = []): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function send(Mail $mail, array $additionalHeaders = []): ApiResponse;
}
