<?php

namespace JoliCode\Slack\Api\Model;

class AdminConversationsSearchGetResponse200
{
    /**
     * 
     *
     * @var ObjsChannel[]|null
     */
    protected $channels;
    /**
     * 
     *
     * @var string|null
     */
    protected $nextCursor;
    /**
     * 
     *
     * @return ObjsChannel[]|null
     */
    public function getChannels() : ?array
    {
        return $this->channels;
    }
    /**
     * 
     *
     * @param ObjsChannel[]|null $channels
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
     * @return string|null
     */
    public function getNextCursor() : ?string
    {
        return $this->nextCursor;
    }
    /**
     * 
     *
     * @param string|null $nextCursor
     *
     * @return self
     */
    public function setNextCursor(?string $nextCursor) : self
    {
        $this->nextCursor = $nextCursor;
        return $this;
    }
}