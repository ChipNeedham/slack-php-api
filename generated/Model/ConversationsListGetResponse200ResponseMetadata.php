<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsListGetResponse200ResponseMetadata
{
    /**
     * 
     *
     * @var string|null
     */
    protected $nextCursor;
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