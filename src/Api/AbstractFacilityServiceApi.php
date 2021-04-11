<?php


namespace FacilityCloud\Api;


use FacilityCloud\Api\Interfaces\ApiHandler;
use FacilityCloud\Api\Interfaces\ApiRequest as ApiRequestInterface;
use FacilityCloud\Api\Interfaces\ApiResponse as ApiResponseInterface;
use GuzzleHttp\Client;
use Monolog\Logger;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;

class AbstractFacilityServiceApi implements ApiHandler
{

    public const API_BASE_URI = 'https://api.facilityservice.cloud/api';

    public ClientInterface $client;
    public LoggerInterface $logger;

    public function __construct(?ClientInterface $client, ?LoggerInterface $logger) {

        if ($client !== null) {
            $this->client = $client;
        } else {
            $this->client = new Client(['base_uri' => self::API_BASE_URI]);
        }

        if ($logger !== null) {
            $this->logger = $logger;
        } else {
            $this->logger = new Logger('FacilityServiceCloudApi');
        }
    }


    public function handle(ApiRequestInterface $request): ApiResponseInterface
    {
        // @todo: implement the rest
        try {
            $this->logger->debug('Start API call', [
                'uri' => $request->uri(),
                'method' => $request->method(),
                'data' => $request->data()
            ]);

            $response = $this->client->request(
                $request->method(),
                $request->uri()
                [] // @todo: implement the options
            );

            $this->logger->debug('End API call', [
                'status' => $response->getStatusCode(),
                'body' => $response->getBody()
            ]);

            return $request->handleResponse($response);

        } catch (\Throwable $exception) {

            $this->logger->error('Exception during API call', [
                'message' => $exception->getMessage(),
                'exception' => $exception
            ]);

            return $request->handleResponse(null, $exception);
        }
    }

    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }
}