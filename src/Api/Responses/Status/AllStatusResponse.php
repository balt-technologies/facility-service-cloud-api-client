<?php


namespace FacilityCloud\Api\Responses\Status;


use FacilityCloud\Api\Interfaces\ApiResponse;
use Psr\Http\Message\ResponseInterface;

class AllStatusResponse implements ApiResponse
{
    public ResponseInterface $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function response(): ResponseInterface
    {
        return $this->response;
    }

    public function data(): object
    {
        $data = $this->response->getBody()->getContents();

        return json_decode($data);
    }
}
