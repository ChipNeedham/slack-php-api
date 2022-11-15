<?php

namespace JoliCode\Slack\Api\Model;

class UsersSetPhotoPostResponse200
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
     * @var UsersSetPhotoPostResponse200Profile|null
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
     * @return UsersSetPhotoPostResponse200Profile|null
     */
    public function getProfile() : ?UsersSetPhotoPostResponse200Profile
    {
        return $this->profile;
    }
    /**
     * 
     *
     * @param UsersSetPhotoPostResponse200Profile|null $profile
     *
     * @return self
     */
    public function setProfile(?UsersSetPhotoPostResponse200Profile $profile) : self
    {
        $this->profile = $profile;
        return $this;
    }
}