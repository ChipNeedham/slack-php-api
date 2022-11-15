<?php

namespace JoliCode\Slack\Api\Model;

class RtmConnectGetResponse200
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
     * @var RtmConnectGetResponse200Self|null
     */
    protected $self;
    /**
     * 
     *
     * @var RtmConnectGetResponse200Team|null
     */
    protected $team;
    /**
     * 
     *
     * @var string|null
     */
    protected $url;
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
     * @return RtmConnectGetResponse200Self|null
     */
    public function getSelf() : ?RtmConnectGetResponse200Self
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param RtmConnectGetResponse200Self|null $self
     *
     * @return self
     */
    public function setSelf(?RtmConnectGetResponse200Self $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return RtmConnectGetResponse200Team|null
     */
    public function getTeam() : ?RtmConnectGetResponse200Team
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param RtmConnectGetResponse200Team|null $team
     *
     * @return self
     */
    public function setTeam(?RtmConnectGetResponse200Team $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
}