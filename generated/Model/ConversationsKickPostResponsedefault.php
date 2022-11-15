<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsKickPostResponsedefault
{
    /**
     * Note: PHP callstack is only visible in dev/qa
     *
     * @var string|null
     */
    protected $callstack;
    /**
     * 
     *
     * @var string|null
     */
    protected $error;
    /**
     * 
     *
     * @var string|null
     */
    protected $needed;
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
    protected $provided;
    /**
     * Note: PHP callstack is only visible in dev/qa
     *
     * @return string|null
     */
    public function getCallstack() : ?string
    {
        return $this->callstack;
    }
    /**
     * Note: PHP callstack is only visible in dev/qa
     *
     * @param string|null $callstack
     *
     * @return self
     */
    public function setCallstack(?string $callstack) : self
    {
        $this->callstack = $callstack;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getError() : ?string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNeeded() : ?string
    {
        return $this->needed;
    }
    /**
     * 
     *
     * @param string|null $needed
     *
     * @return self
     */
    public function setNeeded(?string $needed) : self
    {
        $this->needed = $needed;
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
    public function getProvided() : ?string
    {
        return $this->provided;
    }
    /**
     * 
     *
     * @param string|null $provided
     *
     * @return self
     */
    public function setProvided(?string $provided) : self
    {
        $this->provided = $provided;
        return $this;
    }
}