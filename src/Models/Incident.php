<?php


namespace FacilityCloud\Models;


class Incident
{
    public string $id;
    public string $number;

    public Problem $problem;
    public Entity $entity;
}
