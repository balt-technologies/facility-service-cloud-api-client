<?php


namespace FacilityCloud\Api;

use FacilityCloud\Api\Requests\IncidentComment\AllIncidentCommentsRequest;
use FacilityCloud\Api\Requests\Incidents\AllIncidentsRequest;
use FacilityCloud\Api\Requests\Incidents\IncidentViewRequest;
use FacilityCloud\Api\Responses\IncidentComments\AllIncidentCommentsResponse;
use FacilityCloud\Api\Responses\Incidents\AllIncidentsResponse;
use FacilityCloud\Models\Incident;
use FacilityCloud\Models\IncidentComment;
use JsonMapper;
use JsonMapper_Exception;

class IncidentCommentApi extends AbstractFacilityServiceApi
{

    /**
     * @param array|null $filter
     * @return Incident[]
     * @throws JsonMapper_Exception
     */
    function getAllIncidentComments(?array $filter = []): array
    {
        $request = new AllIncidentCommentsRequest();

        /** @var AllIncidentCommentsResponse $response */
        $response = $this->handle($request);

        $mapper = new JsonMapper();

        return $mapper->mapArray($response->data()->data, array(), IncidentComment::class);
    }
}
