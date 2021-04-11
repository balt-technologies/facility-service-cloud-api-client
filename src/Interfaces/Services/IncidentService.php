<?php
namespace FacilityCloud\Interfaces\Services;

use FacilityCloud\Interfaces\Models\Entity;
use FacilityCloud\Interfaces\Models\Incident;
use FacilityCloud\Interfaces\Models\Issue;
use FacilityCloud\Interfaces\Models\Status;

interface IncidentService
{
    /**
     * @param string $incidentUuid
     * @return Incident|null
     */
    public function get(string $incidentUuid): ?Incident;

    /**
     * @param Incident $incident
     * @return bool
     */
    public function delete(Incident $incident): bool;

    /**
     * @param array $filter
     * @return Incident[]
     */
    public function all(array $filter): array;

    /**
     * @param Entity $entity
     * @param Issue $issue
     * @param string|null $description
     * @param Status|null $status
     * @param array|null $attributes
     * @return Incident|null
     */
    public function add(Entity $entity, Issue $issue, ?string $description, ?Status $status, ?array $attributes): ?Incident;

    /**
     * @param Incident $incident
     * @return Incident|null
     */
    public function update(Incident $incident): ?Incident;

}