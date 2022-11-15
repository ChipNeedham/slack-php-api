<?php

namespace JoliCode\Slack\Api\Model;

class UsersListGetResponse200
{
    /**
     * 
     *
     * @var int|null
     */
    protected $cacheTs;
    /**
     * 
     *
     * @var ObjsUser[]|null
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
     * @var ObjsResponseMetadata|null
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @return int|null
     */
    public function getCacheTs() : ?int
    {
        return $this->cacheTs;
    }
    /**
     * 
     *
     * @param int|null $cacheTs
     *
     * @return self
     */
    public function setCacheTs(?int $cacheTs) : self
    {
        $this->cacheTs = $cacheTs;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsUser[]|null
     */
    public function getMembers() : ?array
    {
        return $this->members;
    }
    /**
     * 
     *
     * @param ObjsUser[]|null $members
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
     * @return ObjsResponseMetadata|null
     */
    public function getResponseMetadata() : ?ObjsResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ObjsResponseMetadata|null $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(?ObjsResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}