<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsLeavePostResponse200
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $notInChannel;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @return bool|null
     */
    public function getNotInChannel() : ?bool
    {
        return $this->notInChannel;
    }
    /**
     * 
     *
     * @param bool|null $notInChannel
     *
     * @return self
     */
    public function setNotInChannel(?bool $notInChannel) : self
    {
        $this->notInChannel = $notInChannel;
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