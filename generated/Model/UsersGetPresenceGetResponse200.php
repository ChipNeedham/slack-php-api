<?php

namespace JoliCode\Slack\Api\Model;

class UsersGetPresenceGetResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $autoAway;
    /**
     * 
     *
     * @var int|null
     */
    protected $connectionCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastActivity;
    /**
     * 
     *
     * @var bool|null
     */
    protected $manualAway;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var bool|null
     */
    protected $online;
    /**
     * 
     *
     * @var string|null
     */
    protected $presence;
    /**
     * 
     *
     * @return bool|null
     */
    public function getAutoAway() : ?bool
    {
        return $this->autoAway;
    }
    /**
     * 
     *
     * @param bool|null $autoAway
     *
     * @return self
     */
    public function setAutoAway(?bool $autoAway) : self
    {
        $this->autoAway = $autoAway;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConnectionCount() : ?int
    {
        return $this->connectionCount;
    }
    /**
     * 
     *
     * @param int|null $connectionCount
     *
     * @return self
     */
    public function setConnectionCount(?int $connectionCount) : self
    {
        $this->connectionCount = $connectionCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastActivity() : ?int
    {
        return $this->lastActivity;
    }
    /**
     * 
     *
     * @param int|null $lastActivity
     *
     * @return self
     */
    public function setLastActivity(?int $lastActivity) : self
    {
        $this->lastActivity = $lastActivity;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getManualAway() : ?bool
    {
        return $this->manualAway;
    }
    /**
     * 
     *
     * @param bool|null $manualAway
     *
     * @return self
     */
    public function setManualAway(?bool $manualAway) : self
    {
        $this->manualAway = $manualAway;
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
     * @return bool|null
     */
    public function getOnline() : ?bool
    {
        return $this->online;
    }
    /**
     * 
     *
     * @param bool|null $online
     *
     * @return self
     */
    public function setOnline(?bool $online) : self
    {
        $this->online = $online;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPresence() : ?string
    {
        return $this->presence;
    }
    /**
     * 
     *
     * @param string|null $presence
     *
     * @return self
     */
    public function setPresence(?string $presence) : self
    {
        $this->presence = $presence;
        return $this;
    }
}