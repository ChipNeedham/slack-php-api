<?php

namespace JoliCode\Slack\Api\Model;

class ChatUpdatePostResponse200
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
     * @var ChatUpdatePostResponse200Message|null
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
     * @var string|null
     */
    protected $text;
    /**
     * 
     *
     * @var string|null
     */
    protected $ts;
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
     * @return ChatUpdatePostResponse200Message|null
     */
    public function getMessage() : ?ChatUpdatePostResponse200Message
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param ChatUpdatePostResponse200Message|null $message
     *
     * @return self
     */
    public function setMessage(?ChatUpdatePostResponse200Message $message) : self
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
    /**
     * 
     *
     * @return string|null
     */
    public function getTs() : ?string
    {
        return $this->ts;
    }
    /**
     * 
     *
     * @param string|null $ts
     *
     * @return self
     */
    public function setTs(?string $ts) : self
    {
        $this->ts = $ts;
        return $this;
    }
}