<?php

namespace JoliCode\Slack\Api\Model;

class ChatGetPermalinkGetResponse200
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
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var string|null
     */
    protected $permalink;
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
    public function getPermalink() : ?string
    {
        return $this->permalink;
    }
    /**
     * 
     *
     * @param string|null $permalink
     *
     * @return self
     */
    public function setPermalink(?string $permalink) : self
    {
        $this->permalink = $permalink;
        return $this;
    }
}