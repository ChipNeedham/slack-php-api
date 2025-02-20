<?php

namespace JoliCode\Slack\Api\Model;

class UsersIdentityGetResponse200Item1
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
     * @var UsersIdentityGetResponse200Item1Team|null
     */
    protected $team;
    /**
     * 
     *
     * @var UsersIdentityGetResponse200Item1User|null
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
     * @return UsersIdentityGetResponse200Item1Team|null
     */
    public function getTeam() : ?UsersIdentityGetResponse200Item1Team
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item1Team|null $team
     *
     * @return self
     */
    public function setTeam(?UsersIdentityGetResponse200Item1Team $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return UsersIdentityGetResponse200Item1User|null
     */
    public function getUser() : ?UsersIdentityGetResponse200Item1User
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item1User|null $user
     *
     * @return self
     */
    public function setUser(?UsersIdentityGetResponse200Item1User $user) : self
    {
        $this->user = $user;
        return $this;
    }
}