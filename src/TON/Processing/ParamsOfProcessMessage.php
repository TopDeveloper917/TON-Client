<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Processing;

use JsonSerializable;

class ParamsOfProcessMessage implements JsonSerializable
{
    /** Message encode parameters. */
    private ParamsOfEncodeMessage $_messageEncodeParams;

    /** Flag for requesting events sending */
    private bool $_sendEvents;

    public function __construct(?array $dto = null)
    {
        if (!$dto) return;
        $this->_messageEncodeParams = new ParamsOfEncodeMessage($dto['message_encode_params']);
        $this->_sendEvents = $dto['send_events'];
    }

    /**
     * Message encode parameters.
     */
    public function getMessageEncodeParams(): ParamsOfEncodeMessage
    {
        return $this->_messageEncodeParams;
    }

    /**
     * Flag for requesting events sending
     */
    public function getSendEvents(): bool
    {
        return $this->_sendEvents;
    }

    /**
     * Message encode parameters.
     */
    public function setMessageEncodeParams(ParamsOfEncodeMessage $messageEncodeParams): self
    {
        $this->_messageEncodeParams = $messageEncodeParams;
        return $this;
    }

    /**
     * Flag for requesting events sending
     */
    public function setSendEvents(bool $sendEvents): self
    {
        $this->_sendEvents = $sendEvents;
        return $this;
    }

    public function jsonSerialize()
    {
        $result = [];
        if ($this->_messageEncodeParams !== null) $result['message_encode_params'] = $this->_messageEncodeParams;
        if ($this->_sendEvents !== null) $result['send_events'] = $this->_sendEvents;
        return $result;
    }
}