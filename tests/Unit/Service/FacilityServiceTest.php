<?php

namespace Tests\Unit\Service;

use FacilityCloud\Services\FacilityService;
use FacilityCloud\Services\IncidentService;
use PHPUnit\Framework\TestCase;

class FacilityServiceTest extends TestCase
{

    public function testGetApiToken()
    {
        $facilityService = new FacilityService('test_api_token');

        self::assertEquals('test_api_token', $facilityService->getApiToken());
    }

    public function testIncidentServiceIsAvailableAfterConstruct()
    {
        $facilityService = new FacilityService('test_api_token');

        self::assertInstanceOf(IncidentService::class, $facilityService->incidents());
    }

}