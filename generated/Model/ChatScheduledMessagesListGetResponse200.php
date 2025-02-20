<?php

namespace JoliCode\Slack\Api\Model;

class ChatScheduledMessagesListGetResponse200
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var ChatScheduledMessagesListGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @var ChatScheduledMessagesListGetResponse200ScheduledMessagesItem[]|null
     */
    protected $scheduledMessages;
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
     * @return ChatScheduledMessagesListGetResponse200ResponseMetadata|null
     */
    public function getResponseMetadata() : ?ChatScheduledMessagesListGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ChatScheduledMessagesListGetResponse200ResponseMetadata|null $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(?ChatScheduledMessagesListGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return ChatScheduledMessagesListGetResponse200ScheduledMessagesItem[]|null
     */
    public function getScheduledMessages() : ?array
    {
        return $this->scheduledMessages;
    }
    /**
     * 
     *
     * @param ChatScheduledMessagesListGetResponse200ScheduledMessagesItem[]|null $scheduledMessages
     *
     * @return self
     */
    public function setScheduledMessages(?array $scheduledMessages) : self
    {
        $this->scheduledMessages = $scheduledMessages;
        return $this;
    }
}