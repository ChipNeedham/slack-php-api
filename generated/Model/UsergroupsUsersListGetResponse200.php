<?php

namespace JoliCode\Slack\Api\Model;

class UsergroupsUsersListGetResponse200
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
     * @var string[]|null
     */
    protected $users;
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
     * @return string[]|null
     */
    public function getUsers() : ?array
    {
        return $this->users;
    }
    /**
     * 
     *
     * @param string[]|null $users
     *
     * @return self
     */
    public function setUsers(?array $users) : self
    {
        $this->users = $users;
        return $this;
    }
}