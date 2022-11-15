<?php

namespace JoliCode\Slack\Api\Model;

class AdminConversationsGetTeamsGetResponse200
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var AdminConversationsGetTeamsGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $teamIds;
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
     * @return AdminConversationsGetTeamsGetResponse200ResponseMetadata|null
     */
    public function getResponseMetadata() : ?AdminConversationsGetTeamsGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param AdminConversationsGetTeamsGetResponse200ResponseMetadata|null $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(?AdminConversationsGetTeamsGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getTeamIds() : ?array
    {
        return $this->teamIds;
    }
    /**
     * 
     *
     * @param string[]|null $teamIds
     *
     * @return self
     */
    public function setTeamIds(?array $teamIds) : self
    {
        $this->teamIds = $teamIds;
        return $this;
    }
}