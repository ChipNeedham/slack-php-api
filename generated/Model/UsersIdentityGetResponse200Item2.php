<?php

namespace JoliCode\Slack\Api\Model;

class UsersIdentityGetResponse200Item2
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
     * @var UsersIdentityGetResponse200Item2Team|null
     */
    protected $team;
    /**
     * 
     *
     * @var UsersIdentityGetResponse200Item2User|null
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
     * @return UsersIdentityGetResponse200Item2Team|null
     */
    public function getTeam() : ?UsersIdentityGetResponse200Item2Team
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item2Team|null $team
     *
     * @return self
     */
    public function setTeam(?UsersIdentityGetResponse200Item2Team $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return UsersIdentityGetResponse200Item2User|null
     */
    public function getUser() : ?UsersIdentityGetResponse200Item2User
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item2User|null $user
     *
     * @return self
     */
    public function setUser(?UsersIdentityGetResponse200Item2User $user) : self
    {
        $this->user = $user;
        return $this;
    }
}