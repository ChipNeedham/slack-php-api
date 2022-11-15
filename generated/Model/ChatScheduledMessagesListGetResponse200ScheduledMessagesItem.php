<?php

namespace JoliCode\Slack\Api\Model;

class ChatScheduledMessagesListGetResponse200ScheduledMessagesItem
{
    /**
     * 
     *
     * @var string|null
     */
    protected $channelId;
    /**
     * 
     *
     * @var int|null
     */
    protected $dateCreated;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|string|null
     */
    protected $postAt;
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
    public function getChannelId() : ?string
    {
        return $this->channelId;
    }
    /**
     * 
     *
     * @param string|null $channelId
     *
     * @return self
     */
    public function setChannelId(?string $channelId) : self
    {
        $this->channelId = $channelId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDateCreated() : ?int
    {
        return $this->dateCreated;
    }
    /**
     * 
     *
     * @param int|null $dateCreated
     *
     * @return self
     */
    public function setDateCreated(?int $dateCreated) : self
    {
        $this->dateCreated = $dateCreated;
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
     * @return int|string|null
     */
    public function getPostAt()
    {
        return $this->postAt;
    }
    /**
     * 
     *
     * @param int|string|null $postAt
     *
     * @return self
     */
    public function setPostAt($postAt) : self
    {
        $this->postAt = $postAt;
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