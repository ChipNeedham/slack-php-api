<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsHistoryGetResponse200
{
    /**
     * 
     *
     * @var int|null
     */
    protected $channelActionsCount;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $channelActionsTs;
    /**
     * 
     *
     * @var bool|null
     */
    protected $hasMore;
    /**
     * 
     *
     * @var ObjsMessage[]|null
     */
    protected $messages;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var int|null
     */
    protected $pinCount;
    /**
     * 
     *
     * @var ConversationsHistoryGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @return int|null
     */
    public function getChannelActionsCount() : ?int
    {
        return $this->channelActionsCount;
    }
    /**
     * 
     *
     * @param int|null $channelActionsCount
     *
     * @return self
     */
    public function setChannelActionsCount(?int $channelActionsCount) : self
    {
        $this->channelActionsCount = $channelActionsCount;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getChannelActionsTs()
    {
        return $this->channelActionsTs;
    }
    /**
     * 
     *
     * @param mixed $channelActionsTs
     *
     * @return self
     */
    public function setChannelActionsTs($channelActionsTs) : self
    {
        $this->channelActionsTs = $channelActionsTs;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getHasMore() : ?bool
    {
        return $this->hasMore;
    }
    /**
     * 
     *
     * @param bool|null $hasMore
     *
     * @return self
     */
    public function setHasMore(?bool $hasMore) : self
    {
        $this->hasMore = $hasMore;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsMessage[]|null
     */
    public function getMessages() : ?array
    {
        return $this->messages;
    }
    /**
     * 
     *
     * @param ObjsMessage[]|null $messages
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
     * @return int|null
     */
    public function getPinCount() : ?int
    {
        return $this->pinCount;
    }
    /**
     * 
     *
     * @param int|null $pinCount
     *
     * @return self
     */
    public function setPinCount(?int $pinCount) : self
    {
        $this->pinCount = $pinCount;
        return $this;
    }
    /**
     * 
     *
     * @return ConversationsHistoryGetResponse200ResponseMetadata|null
     */
    public function getResponseMetadata() : ?ConversationsHistoryGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ConversationsHistoryGetResponse200ResponseMetadata|null $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(?ConversationsHistoryGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}