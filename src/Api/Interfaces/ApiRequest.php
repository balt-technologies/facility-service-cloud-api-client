<?php

namespace FacilityCloud\Api\Interfaces;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Throwable;

interface ApiRequest
{
    public function method(): string;

    public function uri(): string;

    public function data(): array;

    public function headers(): array;

    public function successful(): array;

    /**
     * @param ResponseInterface|null $response
     * @param Throwable|null $exception
     * @return ApiResponse
     */
    public function handleResponse(
        ?ResponseInterface $response,
        ?Throwable $exception = null
    ): ApiResponse;
}