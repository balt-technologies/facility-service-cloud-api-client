<?php

namespace FacilityCloud\Services;

use FacilityCloud\Interfaces\Models\Incident as IncidentInterface;
use FacilityCloud\Interfaces\Models\Entity as EntityInterface;
use FacilityCloud\Interfaces\Models\Issue as IssueInterface;
use FacilityCloud\Interfaces\Models\Status as StatusInterface;
use FacilityCloud\Interfaces\Services\FacilityService as FacilityServiceInterface;
use FacilityCloud\Interfaces\Services\IncidentService as IncidentServiceInterface;

class IncidentService implements IncidentServiceInterface
{
    private FacilityServiceInterface $facilityService;

    public function __construct(FacilityServiceInterface $facilityService) {
        $this->facilityService = $facilityService;
    }

    public function get(string $incidentUuid): ?IncidentInterface
    {
        $this->facilityService->log()->debug('Get called');

        // TODO: Implement get() method.
        return 'Bla';
    }

    public function delete(IncidentInterface $incident): bool
    {
        // TODO: Implement delete() method.
    }

    public function all(array $filter): array
    {
        // TODO: Implement all() method.
    }

    public function add(
        EntityInterface $entity,
        IssueInterface $issue,
        ?string $description,
        ?StatusInterface $status,
        ?array $attributes
    ): ?IncidentInterface {
        // TODO: Implement add() method.
    }

    public function update(IncidentInterface $incident): ?IncidentInterface
    {
        // TODO: Implement update() method.
    }
}