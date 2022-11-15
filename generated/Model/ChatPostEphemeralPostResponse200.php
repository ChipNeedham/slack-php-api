<?php

namespace JoliCode\Slack\Api\Model;

class ChatPostEphemeralPostResponse200
{
    /**
     * 
     *
     * @var string|null
     */
    protected $messageTs;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @return string|null
     */
    public function getMessageTs() : ?string
    {
        return $this->messageTs;
    }
    /**
     * 
     *
     * @param string|null $messageTs
     *
     * @return self
     */
    public function setMessageTs(?string $messageTs) : self
    {
        $this->messageTs = $messageTs;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOk() : ?bool
    {
        return $this->ok;
    }
    /**
     * 
     *
     * @param bool|null $ok
     *
     * @return self
     */
    public function setOk(?bool $ok) : self
    {
        $this->ok = $ok;
        return $this;
    }
}