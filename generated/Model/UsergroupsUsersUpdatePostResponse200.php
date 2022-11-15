<?php

namespace JoliCode\Slack\Api\Model;

class UsergroupsUsersUpdatePostResponse200
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
     * @var ObjsSubteam|null
     */
    protected $usergroup;
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
     * @return ObjsSubteam|null
     */
    public function getUsergroup() : ?ObjsSubteam
    {
        return $this->usergroup;
    }
    /**
     * 
     *
     * @param ObjsSubteam|null $usergroup
     *
     * @return self
     */
    public function setUsergroup(?ObjsSubteam $usergroup) : self
    {
        $this->usergroup = $usergroup;
        return $this;
    }
}