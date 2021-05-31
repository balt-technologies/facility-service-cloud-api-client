<?php


namespace FacilityCloud\Api;

use FacilityCloud\Api\Requests\Entities\AllEntitiesRequest;
use FacilityCloud\Api\Requests\Incidents\AllIncidentsRequest;
use FacilityCloud\Api\Requests\Status\AllStatusRequest;
use FacilityCloud\Api\Responses\Entities\AllEntitiesResponse;
use FacilityCloud\Api\Responses\Incidents\AllIncidentsResponse;
use FacilityCloud\Api\Responses\Status\AllStatusResponse;
use FacilityCloud\Models\Entity;
use FacilityCloud\Models\Incident;
use FacilityCloud\Models\Status;
use JsonMapper;
use JsonMapper_Exception;

class StatusApi extends AbstractFacilityServiceApi
{
    /**
     * @param array|null $filter
     * @return Incident[]
     * @throws JsonMapper_Exception
     */
    function gettAllStatuses(?array $filter = []): array
    {
        $request = new AllStatusRequest();

        /** @var AllStatusResponse $response */
        $response = $this->handle($request);

        $mapper = new JsonMapper();

        return $mapper->mapArray($response->data()->data, array(), Status::class);
    }
}
