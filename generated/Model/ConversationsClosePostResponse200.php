<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsClosePostResponse200
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $alreadyClosed;
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
    public function getAlreadyClosed() : ?bool
    {
        return $this->alreadyClosed;
    }
    /**
     * 
     *
     * @param bool|null $alreadyClosed
     *
     * @return self
     */
    public function setAlreadyClosed(?bool $alreadyClosed) : self
    {
        $this->alreadyClosed = $alreadyClosed;
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