<?php

namespace JoliCode\Slack\Api\Model;

class AppsPermissionsScopesListGetResponse200 extends \ArrayObject
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
     * @var AppsPermissionsScopesListGetResponse200Scopes|null
     */
    protected $scopes;
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
     * @return AppsPermissionsScopesListGetResponse200Scopes|null
     */
    public function getScopes() : ?AppsPermissionsScopesListGetResponse200Scopes
    {
        return $this->scopes;
    }
    /**
     * 
     *
     * @param AppsPermissionsScopesListGetResponse200Scopes|null $scopes
     *
     * @return self
     */
    public function setScopes(?AppsPermissionsScopesListGetResponse200Scopes $scopes) : self
    {
        $this->scopes = $scopes;
        return $this;
    }
}