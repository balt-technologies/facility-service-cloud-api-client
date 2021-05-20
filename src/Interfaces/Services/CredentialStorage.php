<?php

namespace FacilityCloud\Interfaces\Services;

interface CredentialStorage
{
    /**
     * retrieve the Credential
     * @param string $token
     * @return void
     */
    public function set(string $token): void;

    /**#
     * @return string
     */
    public function get(): string;
}
