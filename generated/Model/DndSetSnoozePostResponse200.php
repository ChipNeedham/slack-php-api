<?php

namespace JoliCode\Slack\Api\Model;

class DndSetSnoozePostResponse200
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
     * @var bool|null
     */
    protected $snoozeEnabled;
    /**
     * 
     *
     * @var int|null
     */
    protected $snoozeEndtime;
    /**
     * 
     *
     * @var int|null
     */
    protected $snoozeRemaining;
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
    public function getSnoozeEnabled() : ?bool
    {
        return $this->snoozeEnabled;
    }
    /**
     * 
     *
     * @param bool|null $snoozeEnabled
     *
     * @return self
     */
    public function setSnoozeEnabled(?bool $snoozeEnabled) : self
    {
        $this->snoozeEnabled = $snoozeEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSnoozeEndtime() : ?int
    {
        return $this->snoozeEndtime;
    }
    /**
     * 
     *
     * @param int|null $snoozeEndtime
     *
     * @return self
     */
    public function setSnoozeEndtime(?int $snoozeEndtime) : self
    {
        $this->snoozeEndtime = $snoozeEndtime;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSnoozeRemaining() : ?int
    {
        return $this->snoozeRemaining;
    }
    /**
     * 
     *
     * @param int|null $snoozeRemaining
     *
     * @return self
     */
    public function setSnoozeRemaining(?int $snoozeRemaining) : self
    {
        $this->snoozeRemaining = $snoozeRemaining;
        return $this;
    }
}