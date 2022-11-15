<?php

namespace JoliCode\Slack\Api\Model;

class UsersProfileGetGetResponse200
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
     * @var ObjsUserProfile|null
     */
    protected $profile;
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
}