<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsCreatePostResponse200
{
    /**
     * 
     *
     * @var ObjsConversation|null
     */
    protected $channel;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @return ObjsConversation|null
     */
    public function getChannel() : ?ObjsConversation
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param ObjsConversation|null $channel
     *
     * @return self
     */
    public function setChannel(?ObjsConversation $channel) : self
    {
        $this->channel = $channel;
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