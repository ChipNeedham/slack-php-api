<?php

namespace JoliCode\Slack\Api\Model;

class AdminConversationsCreatePostResponse200
{
    /**
     * 
     *
     * @var string|null
     */
    protected $channelId;
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
    public function getChannelId() : ?string
    {
        return $this->channelId;
    }
    /**
     * 
     *
     * @param string|null $channelId
     *
     * @return self
     */
    public function setChannelId(?string $channelId) : self
    {
        $this->channelId = $channelId;
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