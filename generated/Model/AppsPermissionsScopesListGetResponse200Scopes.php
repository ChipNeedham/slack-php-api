<?php

namespace JoliCode\Slack\Api\Model;

class AppsPermissionsScopesListGetResponse200Scopes extends \ArrayObject
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $appHome;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $channel;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $group;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $im;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $mpim;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $team;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $user;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAppHome() : ?array
    {
        return $this->appHome;
    }
    /**
     * 
     *
     * @param string[]|null $appHome
     *
     * @return self
     */
    public function setAppHome(?array $appHome) : self
    {
        $this->appHome = $appHome;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getChannel() : ?array
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param string[]|null $channel
     *
     * @return self
     */
    public function setChannel(?array $channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getGroup() : ?array
    {
        return $this->group;
    }
    /**
     * 
     *
     * @param string[]|null $group
     *
     * @return self
     */
    public function setGroup(?array $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getIm() : ?array
    {
        return $this->im;
    }
    /**
     * 
     *
     * @param string[]|null $im
     *
     * @return self
     */
    public function setIm(?array $im) : self
    {
        $this->im = $im;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getMpim() : ?array
    {
        return $this->mpim;
    }
    /**
     * 
     *
     * @param string[]|null $mpim
     *
     * @return self
     */
    public function setMpim(?array $mpim) : self
    {
        $this->mpim = $mpim;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getTeam() : ?array
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string[]|null $team
     *
     * @return self
     */
    public function setTeam(?array $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getUser() : ?array
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string[]|null $user
     *
     * @return self
     */
    public function setUser(?array $user) : self
    {
        $this->user = $user;
        return $this;
    }
}