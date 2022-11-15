<?php

namespace JoliCode\Slack\Api\Model;

class TeamProfileGetGetResponse200
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
     * @var TeamProfileGetGetResponse200Profile|null
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
     * @return TeamProfileGetGetResponse200Profile|null
     */
    public function getProfile() : ?TeamProfileGetGetResponse200Profile
    {
        return $this->profile;
    }
    /**
     * 
     *
     * @param TeamProfileGetGetResponse200Profile|null $profile
     *
     * @return self
     */
    public function setProfile(?TeamProfileGetGetResponse200Profile $profile) : self
    {
        $this->profile = $profile;
        return $this;
    }
}