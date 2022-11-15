<?php

namespace JoliCode\Slack\Api\Model;

class ObjsReminder
{
    /**
     * 
     *
     * @var int|null
     */
    protected $completeTs;
    /**
     * 
     *
     * @var string|null
     */
    protected $creator;
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var bool|null
     */
    protected $recurring;
    /**
     * 
     *
     * @var string|null
     */
    protected $text;
    /**
     * 
     *
     * @var int|null
     */
    protected $time;
    /**
     * 
     *
     * @var string|null
     */
    protected $user;
    /**
     * 
     *
     * @return int|null
     */
    public function getCompleteTs() : ?int
    {
        return $this->completeTs;
    }
    /**
     * 
     *
     * @param int|null $completeTs
     *
     * @return self
     */
    public function setCompleteTs(?int $completeTs) : self
    {
        $this->completeTs = $completeTs;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreator() : ?string
    {
        return $this->creator;
    }
    /**
     * 
     *
     * @param string|null $creator
     *
     * @return self
     */
    public function setCreator(?string $creator) : self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getRecurring() : ?bool
    {
        return $this->recurring;
    }
    /**
     * 
     *
     * @param bool|null $recurring
     *
     * @return self
     */
    public function setRecurring(?bool $recurring) : self
    {
        $this->recurring = $recurring;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getText() : ?string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string|null $text
     *
     * @return self
     */
    public function setText(?string $text) : self
    {
        $this->text = $text;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTime() : ?int
    {
        return $this->time;
    }
    /**
     * 
     *
     * @param int|null $time
     *
     * @return self
     */
    public function setTime(?int $time) : self
    {
        $this->time = $time;
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
}