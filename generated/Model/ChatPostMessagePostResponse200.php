<?php

namespace JoliCode\Slack\Api\Model;

class ChatPostMessagePostResponse200
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
     * @var ObjsMessage|null
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
     * @return ObjsMessage|null
     */
    public function getMessage() : ?ObjsMessage
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param ObjsMessage|null $message
     *
     * @return self
     */
    public function setMessage(?ObjsMessage $message) : self
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