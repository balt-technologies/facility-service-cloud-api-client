<?php

namespace FacilityCloud\Interfaces\Services;

use Psr\Log\LoggerInterface;

interface FacilityService
{

    public function incidents(): IncidentService;

    public function setLogger(LoggerInterface $logger);

    public function getLogger(): LoggerInterface;

}
