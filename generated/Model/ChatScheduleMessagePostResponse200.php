<?php

namespace JoliCode\Slack\Api\Model;

class ChatScheduleMessagePostResponse200
{
    /**
     * 
     *
     * @var string|null
     */
    protected $channel;
    /**
     * 
     *
     * @var ChatScheduleMessagePostResponse200Message|null
     */
    protected $message;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
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
    protected $scheduledMessageId;
    /**
     * 
     *
     * @return string|null
     */
    public function getChannel() : ?string
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param string|null $channel
     *
     * @return self
     */
    public function setChannel(?string $channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return ChatScheduleMessagePostResponse200Message|null
     */
    public function getMessage() : ?ChatScheduleMessagePostResponse200Message
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param ChatScheduleMessagePostResponse200Message|null $message
     *
     * @return self
     */
    public function setMessage(?ChatScheduleMessagePostResponse200Message $message) : self
    {
        $this->message = $message;
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
    public function getScheduledMessageId() : ?string
    {
        return $this->scheduledMessageId;
    }
    /**
     * 
     *
     * @param string|null $scheduledMessageId
     *
     * @return self
     */
    public function setScheduledMessageId(?string $scheduledMessageId) : self
    {
        $this->scheduledMessageId = $scheduledMessageId;
        return $this;
    }
}