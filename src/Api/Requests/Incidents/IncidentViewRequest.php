<?php


namespace FacilityCloud\Api\Requests\Incidents;


use FacilityCloud\Api\Exceptions\ApiException;
use FacilityCloud\Api\Interfaces\ApiRequest;
use FacilityCloud\Api\Interfaces\ApiResponse;
use FacilityCloud\Api\Responses\Incidents\AllIncidentsResponse;
use Psr\Http\Message\ResponseInterface;
use Throwable;

class IncidentViewRequest implements ApiRequest
{
    private string $incident;

    public function __construct(string $incident)
    {
        $this->incident = $incident;
    }

    public function method(): string
    {
        return 'get';
    }

    public function uri(): string
    {
        return '/api/v1/incident/' . $this->incident;
    }

    //TODO: Wie übergebe ich variablen an die URI
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
                return new AllIncidentsResponse($response);
            }

            throw new ApiException('API call ended in unexpected status code', [
                'code' => $response->getStatusCode(),
                'expected' => $this->successful()
            ]);
        }

        throw $exception;
    }
}
