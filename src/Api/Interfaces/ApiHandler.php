<?php

namespace FacilityCloud\Api\Interfaces;

use FacilityCloud\Api\Interfaces\ApiRequest as ApiRequestInterface;
use FacilityCloud\Api\Interfaces\ApiResponse as ApiResponseInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;

interface ApiHandler
{
    public function handle(ApiRequestInterface $request): ApiResponseInterface;

    public function setClient(ClientInterface $client);

    public function getClient(): ClientInterface;

    public function setLogger(LoggerInterface $logger);

    public function getLogger(): LoggerInterface;
}