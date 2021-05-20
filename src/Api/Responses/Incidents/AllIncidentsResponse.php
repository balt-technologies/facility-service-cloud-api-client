<?php


namespace FacilityCloud\Api\Responses\Incidents;


use FacilityCloud\Api\Interfaces\ApiResponse;
use Psr\Http\Message\ResponseInterface;

class AllIncidentsResponse implements ApiResponse
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

        var_dump($data);
        return json_decode($data);
    }
}
