<?php


namespace FacilityCloud\Api;

use FacilityCloud\Api\Requests\Incidents\AllIncidentsRequest;
use FacilityCloud\Api\Responses\Incidents\AllIncidentsResponse;
use FacilityCloud\Models\Incident;
use JsonMapper;
use JsonMapper_Exception;

class IncidentApi extends AbstractFacilityServiceApi
{

    /**
     * @param array|null $filter
     * @return Incident[]
     * @throws JsonMapper_Exception
     */
    function getIncidents(?array $filter = []): array
    {
        $request = new AllIncidentsRequest();

        /** @var AllIncidentsResponse $response */
        $response = $this->handle($request);

        $mapper = new JsonMapper();

        return $mapper->mapArray($response->data()->data, array(), Incident::class);
    }

}
