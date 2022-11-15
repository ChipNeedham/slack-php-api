<?php

namespace JoliCode\Slack\Api\Model;

class ObjsResponseMetadata
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $messages;
    /**
     * 
     *
     * @var string|null
     */
    protected $nextCursor;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $warnings;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getMessages() : ?array
    {
        return $this->messages;
    }
    /**
     * 
     *
     * @param string[]|null $messages
     *
     * @return self
     */
    public function setMessages(?array $messages) : self
    {
        $this->messages = $messages;
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
    /**
     * 
     *
     * @return string[]|null
     */
    public function getWarnings() : ?array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param string[]|null $warnings
     *
     * @return self
     */
    public function setWarnings(?array $warnings) : self
    {
        $this->warnings = $warnings;
        return $this;
    }
}