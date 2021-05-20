<?php

namespace Tests\Unit\Service;

use FacilityCloud\Services\FacilityService;
use FacilityCloud\Services\FileSystem;
use FacilityCloud\Services\IncidentService;
use PHPUnit\Framework\TestCase;

class FacilityServiceTest extends TestCase
{

    public function testGetApiToken()
    {
        $facilityService = new FacilityService(new FileSystem(__DIR__));

        self::assertEquals('test_api_token', $facilityService->getApiToken());
    }

    public function testIncidentServiceIsAvailableAfterConstruct()
    {
        $facilityService = new FacilityService(new FileSystem(__DIR__));

        self::assertInstanceOf(IncidentService::class, $facilityService->incidents());
    }

}
