<?php

namespace JoliCode\Slack\Api\Model;

class AppsPermissionsInfoGetResponse200InfoMpim
{
    /**
     * 
     *
     * @var ObjsResources|null
     */
    protected $resources;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $scopes;
    /**
     * 
     *
     * @return ObjsResources|null
     */
    public function getResources() : ?ObjsResources
    {
        return $this->resources;
    }
    /**
     * 
     *
     * @param ObjsResources|null $resources
     *
     * @return self
     */
    public function setResources(?ObjsResources $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    /**
     * 
     *
     * @param string[]|null $scopes
     *
     * @return self
     */
    public function setScopes(?array $scopes) : self
    {
        $this->scopes = $scopes;
        return $this;
    }
}