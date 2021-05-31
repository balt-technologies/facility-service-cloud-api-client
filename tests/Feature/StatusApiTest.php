<?php

namespace Tests\Feature;

use FacilityCloud\Api\ProblemApi;
use FacilityCloud\Api\StatusApi;
use FacilityCloud\Services\FileSystem;
use PHPUnit\Framework\TestCase;

class StatusApiTest extends TestCase
{

    public function testGetAllStatuses()
    {
        $statusApi = new StatusApi(new FileSystem(__DIR__));

        $statuses = $statusApi->gettAllStatuses();

        self::assertNotNull($statuses);
    }
}
