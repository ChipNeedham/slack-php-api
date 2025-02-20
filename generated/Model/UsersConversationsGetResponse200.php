<?php

namespace JoliCode\Slack\Api\Model;

class UsersConversationsGetResponse200 extends \ArrayObject
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
     * @var UsersConversationsGetResponse200ResponseMetadata|null
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
     * @return UsersConversationsGetResponse200ResponseMetadata|null
     */
    public function getResponseMetadata() : ?UsersConversationsGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param UsersConversationsGetResponse200ResponseMetadata|null $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(?UsersConversationsGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}