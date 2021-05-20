<?php

namespace Tests\Unit\Service;

use FacilityCloud\Api\IncidentApi;
use FacilityCloud\Services\FileSystem;
use PHPUnit\Framework\TestCase;

class IncidentApiTest extends TestCase
{
    public function testGetIncidents()
    {
        $incidentApi = new IncidentApi(new FileSystem(__DIR__));

        $incidents = $incidentApi->getIncidents();

        self::assertNotNull($incidents);
    }
}
