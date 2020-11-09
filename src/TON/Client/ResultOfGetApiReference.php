<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Client;

use JsonSerializable;

class ResultOfGetApiReference implements JsonSerializable
{
    private $_api;

    public function __construct(?array $dto = null)
    {
        if (!$dto) return;
        $this->_api = $dto['api'];
    }

    public function getApi()
    {
        return $this->_api;
    }

    public function setApi($api): self
    {
        $this->_api = $api;
        return $this;
    }

    public function jsonSerialize()
    {
        $result = [];
        if ($this->_api !== null) $result['api'] = $this->_api;
        return $result;
    }
}
