<?php

use FacilityCloud\Services\IncidentService;
use FacilityCloud\Services\Interfaces\IncidentService as IncidentServiceInterface;

return [
    IncidentServiceInterface::class => DI\get(IncidentService::class)
];