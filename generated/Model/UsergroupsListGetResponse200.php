<?php

namespace JoliCode\Slack\Api\Model;

class UsergroupsListGetResponse200
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
     * @var ObjsSubteam[]|null
     */
    protected $usergroups;
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
     * @return ObjsSubteam[]|null
     */
    public function getUsergroups() : ?array
    {
        return $this->usergroups;
    }
    /**
     * 
     *
     * @param ObjsSubteam[]|null $usergroups
     *
     * @return self
     */
    public function setUsergroups(?array $usergroups) : self
    {
        $this->usergroups = $usergroups;
        return $this;
    }
}