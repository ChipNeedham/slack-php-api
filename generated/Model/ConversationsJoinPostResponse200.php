<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsJoinPostResponse200
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
     * @var ConversationsJoinPostResponse200ResponseMetadata|null
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @var string|null
     */
    protected $warning;
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
    /**
     * 
     *
     * @return ConversationsJoinPostResponse200ResponseMetadata|null
     */
    public function getResponseMetadata() : ?ConversationsJoinPostResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ConversationsJoinPostResponse200ResponseMetadata|null $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(?ConversationsJoinPostResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWarning() : ?string
    {
        return $this->warning;
    }
    /**
     * 
     *
     * @param string|null $warning
     *
     * @return self
     */
    public function setWarning(?string $warning) : self
    {
        $this->warning = $warning;
        return $this;
    }
}