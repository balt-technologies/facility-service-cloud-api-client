<?php


namespace FacilityCloud\Api\Requests\Problems;


use FacilityCloud\Api\Exceptions\ApiException;
use FacilityCloud\Api\Interfaces\ApiRequest;
use FacilityCloud\Api\Interfaces\ApiResponse;
use FacilityCloud\Api\Responses\Entities\AllEntitiesResponse;
use FacilityCloud\Api\Responses\Problems\AllProblemsResponse;
use Psr\Http\Message\ResponseInterface;
use Throwable;

class AllProblemsRequest implements ApiRequest
{
    public function method(): string
    {
        return 'get';
    }

    public function uri(): string
    {
        return '/api/v1/problem';
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

    /**
     * @param ResponseInterface|null $response
     * @param Throwable|null $exception
     * @return ApiResponse
     * @throws ApiException
     * @throws Throwable
     */
    public function handleResponse(?ResponseInterface $response, ?Throwable $exception = null): ApiResponse
    {
        if ($response !== null && $exception === null) {

            if (in_array($response->getStatusCode(), $this->successful())) {
                return new AllProblemsResponse($response);
            }

            throw new ApiException('API call ended in unexpected status code', [
                'code' => $response->getStatusCode(),
                'expected' => $this->successful()
            ]);
        }

        throw $exception;
    }
}
