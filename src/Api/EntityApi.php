<?php


namespace FacilityCloud\Api;

use FacilityCloud\Api\Requests\Entities\AllEntitiesRequest;
use FacilityCloud\Api\Requests\Incidents\AllIncidentsRequest;
use FacilityCloud\Api\Responses\Entities\AllEntitiesResponse;
use FacilityCloud\Api\Responses\Incidents\AllIncidentsResponse;
use FacilityCloud\Models\Entity;
use FacilityCloud\Models\Incident;
use JsonMapper;
use JsonMapper_Exception;

class EntityApi extends AbstractFacilityServiceApi
{
    /**
     * @param array|null $filter
     * @return Incident[]
     * @throws JsonMapper_Exception
     */
    function getAllEntities(?array $filter = []): array
    {
        $request = new AllEntitiesRequest();

        /** @var AllEntitiesResponse $response */
        $response = $this->handle($request);

        $mapper = new JsonMapper();

        return $mapper->mapArray($response->data()->data, array(), Entity::class);
    }
}
