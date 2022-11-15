<?php

namespace JoliCode\Slack\Api\Model;

class AuthTestGetResponse200
{
    /**
     * 
     *
     * @var string|null
     */
    protected $botId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isEnterpriseInstall;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var string|null
     */
    protected $team;
    /**
     * 
     *
     * @var string|null
     */
    protected $teamId;
    /**
     * 
     *
     * @var string|null
     */
    protected $url;
    /**
     * 
     *
     * @var string|null
     */
    protected $user;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
    /**
     * 
     *
     * @return string|null
     */
    public function getBotId() : ?string
    {
        return $this->botId;
    }
    /**
     * 
     *
     * @param string|null $botId
     *
     * @return self
     */
    public function setBotId(?string $botId) : self
    {
        $this->botId = $botId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsEnterpriseInstall() : ?bool
    {
        return $this->isEnterpriseInstall;
    }
    /**
     * 
     *
     * @param bool|null $isEnterpriseInstall
     *
     * @return self
     */
    public function setIsEnterpriseInstall(?bool $isEnterpriseInstall) : self
    {
        $this->isEnterpriseInstall = $isEnterpriseInstall;
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
     * @return string|null
     */
    public function getTeam() : ?string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string|null $team
     *
     * @return self
     */
    public function setTeam(?string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeamId() : ?string
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param string|null $teamId
     *
     * @return self
     */
    public function setTeamId(?string $teamId) : self
    {
        $this->teamId = $teamId;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getUser() : ?string
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string|null $user
     *
     * @return self
     */
    public function setUser(?string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId() : ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
}