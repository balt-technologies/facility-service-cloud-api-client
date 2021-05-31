<?php


namespace FacilityCloud\Api\Requests\IncidentComment;


use FacilityCloud\Api\Exceptions\ApiException;
use FacilityCloud\Api\Interfaces\ApiRequest;
use FacilityCloud\Api\Interfaces\ApiResponse;
use FacilityCloud\Api\Responses\IncidentComments\AllIncidentCommentsResponse;
use Psr\Http\Message\ResponseInterface;
use Throwable;

class AllIncidentCommentsRequest implements ApiRequest
{

    public function method(): string
    {
        return 'get';
    }

    public function uri(): string
    {
        return '/api/v1/comment';
    }

    public function data(): array
    {
        return [];
    }

    public function headers(): array
    {
        return [];
    }

    public function successful(): array
    {
        return [200];
    }

    public function handleResponse(?ResponseInterface $response, ?Throwable $exception = null): ApiResponse
    {
        if ($response !== null && $exception !== null) {

            if (in_array($response->getStatusCode(), $this->successful())) {

                return new AllIncidentCommentsResponse($response);
            }

            throw new ApiException('API call ended in unexpected status code', [
                'code' => $response->getStatusCode(),
                'expected' => $this->successful()
            ]);
        }

        throw $exception;
    }
}
