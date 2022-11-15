<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsRepliesGetResponse200
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $hasMore;
    /**
     * 
     *
     * @var mixed[]|null
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
     * @var ConversationsRepliesGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;
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
     * @return mixed[]|null
     */
    public function getMessages() : ?array
    {
        return $this->messages;
    }
    /**
     * 
     *
     * @param mixed[]|null $messages
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
     * @return ConversationsRepliesGetResponse200ResponseMetadata|null
     */
    public function getResponseMetadata() : ?ConversationsRepliesGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ConversationsRepliesGetResponse200ResponseMetadata|null $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(?ConversationsRepliesGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}