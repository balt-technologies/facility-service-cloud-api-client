<?php
namespace FacilityCloud\Services;

use FacilityCloud\Interfaces\Services\CredentialStorage;
use FacilityCloud\Interfaces\Services\IncidentService as IncidentServiceInterface;
use FacilityCloud\Interfaces\Services\FacilityService as FacilityServiceInterface;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class FacilityService implements FacilityServiceInterface
{

    private LoggerInterface $logger;

    private IncidentServiceInterface $incidentService;

    public function __construct(public CredentialStorage $credentialStorage)
    {

        $this->incidentService = new IncidentService($this);

        $this->logger = new Logger('FacilityServiceCloud');
    }

    public function incidents(): IncidentServiceInterface
    {
        return $this->incidentService;
    }

    public function getApiToken(): string
    {
        return $this->credentialStorage->get();
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    public function log(): LoggerInterface
    {
        return $this->logger;
    }
}
