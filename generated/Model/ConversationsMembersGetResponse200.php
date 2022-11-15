<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsMembersGetResponse200
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $members;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var ConversationsMembersGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getMembers() : ?array
    {
        return $this->members;
    }
    /**
     * 
     *
     * @param string[]|null $members
     *
     * @return self
     */
    public function setMembers(?array $members) : self
    {
        $this->members = $members;
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
     * @return ConversationsMembersGetResponse200ResponseMetadata|null
     */
    public function getResponseMetadata() : ?ConversationsMembersGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ConversationsMembersGetResponse200ResponseMetadata|null $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(?ConversationsMembersGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}