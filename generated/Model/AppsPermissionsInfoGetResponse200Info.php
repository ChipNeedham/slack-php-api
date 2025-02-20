<?php

namespace JoliCode\Slack\Api\Model;

class AppsPermissionsInfoGetResponse200Info
{
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200InfoAppHome|null
     */
    protected $appHome;
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200InfoChannel|null
     */
    protected $channel;
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200InfoGroup|null
     */
    protected $group;
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200InfoIm|null
     */
    protected $im;
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200InfoMpim|null
     */
    protected $mpim;
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200InfoTeam|null
     */
    protected $team;
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200InfoAppHome|null
     */
    public function getAppHome() : ?AppsPermissionsInfoGetResponse200InfoAppHome
    {
        return $this->appHome;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200InfoAppHome|null $appHome
     *
     * @return self
     */
    public function setAppHome(?AppsPermissionsInfoGetResponse200InfoAppHome $appHome) : self
    {
        $this->appHome = $appHome;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200InfoChannel|null
     */
    public function getChannel() : ?AppsPermissionsInfoGetResponse200InfoChannel
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200InfoChannel|null $channel
     *
     * @return self
     */
    public function setChannel(?AppsPermissionsInfoGetResponse200InfoChannel $channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200InfoGroup|null
     */
    public function getGroup() : ?AppsPermissionsInfoGetResponse200InfoGroup
    {
        return $this->group;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200InfoGroup|null $group
     *
     * @return self
     */
    public function setGroup(?AppsPermissionsInfoGetResponse200InfoGroup $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200InfoIm|null
     */
    public function getIm() : ?AppsPermissionsInfoGetResponse200InfoIm
    {
        return $this->im;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200InfoIm|null $im
     *
     * @return self
     */
    public function setIm(?AppsPermissionsInfoGetResponse200InfoIm $im) : self
    {
        $this->im = $im;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200InfoMpim|null
     */
    public function getMpim() : ?AppsPermissionsInfoGetResponse200InfoMpim
    {
        return $this->mpim;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200InfoMpim|null $mpim
     *
     * @return self
     */
    public function setMpim(?AppsPermissionsInfoGetResponse200InfoMpim $mpim) : self
    {
        $this->mpim = $mpim;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200InfoTeam|null
     */
    public function getTeam() : ?AppsPermissionsInfoGetResponse200InfoTeam
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200InfoTeam|null $team
     *
     * @return self
     */
    public function setTeam(?AppsPermissionsInfoGetResponse200InfoTeam $team) : self
    {
        $this->team = $team;
        return $this;
    }
}