<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsListGetResponse200
{
    /**
     * 
     *
     * @var ObjsConversation[]|null
     */
    protected $channels;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var ConversationsListGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @return ObjsConversation[]|null
     */
    public function getChannels() : ?array
    {
        return $this->channels;
    }
    /**
     * 
     *
     * @param ObjsConversation[]|null $channels
     *
     * @return self
     */
    public function setChannels(?array $channels) : self
    {
        $this->channels = $channels;
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
     * @return ConversationsListGetResponse200ResponseMetadata|null
     */
    public function getResponseMetadata() : ?ConversationsListGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ConversationsListGetResponse200ResponseMetadata|null $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(?ConversationsListGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}