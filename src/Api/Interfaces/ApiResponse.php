<?php

namespace FacilityCloud\Api\Interfaces;

use Psr\Http\Message\ResponseInterface;

interface ApiResponse
{

    public function __construct(ResponseInterface $response);

    public function response(): ResponseInterface;

    public function data(): object;
}
