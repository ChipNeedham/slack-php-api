<?php

namespace JoliCode\Slack\Api\Model;

class UsersIdentityGetResponse200Item3
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
     * @var UsersIdentityGetResponse200Item3Team|null
     */
    protected $team;
    /**
     * 
     *
     * @var UsersIdentityGetResponse200Item3User|null
     */
    protected $user;
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
     * @return UsersIdentityGetResponse200Item3Team|null
     */
    public function getTeam() : ?UsersIdentityGetResponse200Item3Team
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item3Team|null $team
     *
     * @return self
     */
    public function setTeam(?UsersIdentityGetResponse200Item3Team $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return UsersIdentityGetResponse200Item3User|null
     */
    public function getUser() : ?UsersIdentityGetResponse200Item3User
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item3User|null $user
     *
     * @return self
     */
    public function setUser(?UsersIdentityGetResponse200Item3User $user) : self
    {
        $this->user = $user;
        return $this;
    }
}