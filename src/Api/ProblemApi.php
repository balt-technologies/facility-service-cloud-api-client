<?php


namespace FacilityCloud\Api;

use FacilityCloud\Api\Requests\Problems\AllProblemsRequest;
use FacilityCloud\Api\Responses\Problems\AllProblemsResponse;
use FacilityCloud\Models\Problem;
use JsonMapper;

class ProblemApi extends AbstractFacilityServiceApi
{
    function getAllProblems(?array $filter = []): array
    {
        $request = new AllProblemsRequest();

        /** @var AllProblemsResponse $response */
        $response = $this->handle($request);

        $mapper = new JsonMapper();

        return $mapper->mapArray($response->data()->data, array(), Problem::class);
    }
}
