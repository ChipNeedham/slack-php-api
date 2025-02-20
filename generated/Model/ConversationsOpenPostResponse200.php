<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsOpenPostResponse200
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $alreadyOpen;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $channel;
    /**
     * 
     *
     * @var bool|null
     */
    protected $noOp;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @return bool|null
     */
    public function getAlreadyOpen() : ?bool
    {
        return $this->alreadyOpen;
    }
    /**
     * 
     *
     * @param bool|null $alreadyOpen
     *
     * @return self
     */
    public function setAlreadyOpen(?bool $alreadyOpen) : self
    {
        $this->alreadyOpen = $alreadyOpen;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param mixed $channel
     *
     * @return self
     */
    public function setChannel($channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getNoOp() : ?bool
    {
        return $this->noOp;
    }
    /**
     * 
     *
     * @param bool|null $noOp
     *
     * @return self
     */
    public function setNoOp(?bool $noOp) : self
    {
        $this->noOp = $noOp;
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
}