<?php

namespace JoliCode\Slack\Api\Model;

class ObjsChannelTopic
{
    /**
     * 
     *
     * @var string|null
     */
    protected $creator;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastSet;
    /**
     * 
     *
     * @var string|null
     */
    protected $value;
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
     * @return int|null
     */
    public function getLastSet() : ?int
    {
        return $this->lastSet;
    }
    /**
     * 
     *
     * @param int|null $lastSet
     *
     * @return self
     */
    public function setLastSet(?int $lastSet) : self
    {
        $this->lastSet = $lastSet;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->value = $value;
        return $this;
    }
}