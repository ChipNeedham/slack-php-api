<?php

namespace JoliCode\Slack\Api\Model;

class ChatScheduleMessagePostResponse200MessageAttachmentsItem
{
    /**
     * 
     *
     * @var string|null
     */
    protected $fallback;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $text;
    /**
     * 
     *
     * @return string|null
     */
    public function getFallback() : ?string
    {
        return $this->fallback;
    }
    /**
     * 
     *
     * @param string|null $fallback
     *
     * @return self
     */
    public function setFallback(?string $fallback) : self
    {
        $this->fallback = $fallback;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
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
}