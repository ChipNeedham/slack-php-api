<?php

namespace JoliCode\Slack\Api\Model;

class ObjsSubteamPrefs
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $channels;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $groups;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getChannels() : ?array
    {
        return $this->channels;
    }
    /**
     * 
     *
     * @param string[]|null $channels
     *
     * @return self
     */
    public function setChannels(?array $channels) : self
    {
        $this->channels = $channels;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getGroups() : ?array
    {
        return $this->groups;
    }
    /**
     * 
     *
     * @param string[]|null $groups
     *
     * @return self
     */
    public function setGroups(?array $groups) : self
    {
        $this->groups = $groups;
        return $this;
    }
}