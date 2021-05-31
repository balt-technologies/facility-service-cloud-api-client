<?php

namespace Tests\Feature;

use FacilityCloud\Api\EntityApi;
use FacilityCloud\Api\IncidentApi;
use FacilityCloud\Services\FileSystem;
use PHPUnit\Framework\TestCase;

class EntityApiTest extends TestCase
{

    public function testGetAllEntities()
    {
        $entityApi = new EntityApi(new FileSystem(__DIR__));

        $entities = $entityApi->getAllEntities();

        self::assertNotNull($entities);
    }
}
