<?php

namespace JoliCode\Slack\Api\Model;

class ObjsResources
{
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $excludedIds;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $ids;
    /**
     * 
     *
     * @var bool|null
     */
    protected $wildcard;
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getExcludedIds() : ?array
    {
        return $this->excludedIds;
    }
    /**
     * 
     *
     * @param mixed[]|null $excludedIds
     *
     * @return self
     */
    public function setExcludedIds(?array $excludedIds) : self
    {
        $this->excludedIds = $excludedIds;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getIds() : ?array
    {
        return $this->ids;
    }
    /**
     * 
     *
     * @param mixed[]|null $ids
     *
     * @return self
     */
    public function setIds(?array $ids) : self
    {
        $this->ids = $ids;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getWildcard() : ?bool
    {
        return $this->wildcard;
    }
    /**
     * 
     *
     * @param bool|null $wildcard
     *
     * @return self
     */
    public function setWildcard(?bool $wildcard) : self
    {
        $this->wildcard = $wildcard;
        return $this;
    }
}