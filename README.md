# facility-service-cloud-api-client
PHP implementation Facility Service Cloud API


// every tenant have their own api token

$fsc = new FacilityService();


$fsc->incidents()->get($incidentUuid);

$fsc->incidents()->add($entity, $problem, ?$description ,?$status);

$fsc->incidents()->update($incident);

$fsc->incidents()->delete($incident);

