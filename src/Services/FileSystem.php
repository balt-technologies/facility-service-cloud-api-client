<?php

namespace FacilityCloud\Services;

use FacilityCloud\Interfaces\Services\CredentialStorage;

class FileSystem implements CredentialStorage
{
    private string $path;
    private string $fileName = 'fsc.json';

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function set(string $token): void
    {
        $credentialFile = fopen($this->path . '/' . $this->fileName, 'wb');

        $tokenArray = ['token' => $token];

        fwrite($credentialFile, json_encode($tokenArray));
    }

    public function get(): string
    {
        $credentialFile = file_get_contents($this->path . '/' . $this->fileName);

        $data = json_decode($credentialFile, true);

        return $data['token'];
    }
}
