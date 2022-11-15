<?php

namespace JoliCode\Slack\Api\Model;

class UsersProfileSetPostResponse200
{
    /**
     * 
     *
     * @var string|null
     */
    protected $emailPending;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var ObjsUserProfile|null
     */
    protected $profile;
    /**
     * 
     *
     * @var string|null
     */
    protected $username;
    /**
     * 
     *
     * @return string|null
     */
    public function getEmailPending() : ?string
    {
        return $this->emailPending;
    }
    /**
     * 
     *
     * @param string|null $emailPending
     *
     * @return self
     */
    public function setEmailPending(?string $emailPending) : self
    {
        $this->emailPending = $emailPending;
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
     * @return ObjsUserProfile|null
     */
    public function getProfile() : ?ObjsUserProfile
    {
        return $this->profile;
    }
    /**
     * 
     *
     * @param ObjsUserProfile|null $profile
     *
     * @return self
     */
    public function setProfile(?ObjsUserProfile $profile) : self
    {
        $this->profile = $profile;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->username = $username;
        return $this;
    }
}