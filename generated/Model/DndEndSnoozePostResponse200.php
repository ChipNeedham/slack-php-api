<?php

namespace JoliCode\Slack\Api\Model;

class DndEndSnoozePostResponse200
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $dndEnabled;
    /**
     * 
     *
     * @var int|null
     */
    protected $nextDndEndTs;
    /**
     * 
     *
     * @var int|null
     */
    protected $nextDndStartTs;
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
     * @return bool|null
     */
    public function getDndEnabled() : ?bool
    {
        return $this->dndEnabled;
    }
    /**
     * 
     *
     * @param bool|null $dndEnabled
     *
     * @return self
     */
    public function setDndEnabled(?bool $dndEnabled) : self
    {
        $this->dndEnabled = $dndEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNextDndEndTs() : ?int
    {
        return $this->nextDndEndTs;
    }
    /**
     * 
     *
     * @param int|null $nextDndEndTs
     *
     * @return self
     */
    public function setNextDndEndTs(?int $nextDndEndTs) : self
    {
        $this->nextDndEndTs = $nextDndEndTs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNextDndStartTs() : ?int
    {
        return $this->nextDndStartTs;
    }
    /**
     * 
     *
     * @param int|null $nextDndStartTs
     *
     * @return self
     */
    public function setNextDndStartTs(?int $nextDndStartTs) : self
    {
        $this->nextDndStartTs = $nextDndStartTs;
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
}