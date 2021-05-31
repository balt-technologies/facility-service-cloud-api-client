<?php

namespace Tests\Feature;

use FacilityCloud\Api\ProblemApi;
use FacilityCloud\Services\FileSystem;
use PHPUnit\Framework\TestCase;

class ProblemApiTest extends TestCase
{

    public function testGetAllEntities()
    {
        $problemApi = new ProblemApi(new FileSystem(__DIR__));

        $problems = $problemApi->getAllProblems();

        self::assertNotNull($problems);
    }
}
