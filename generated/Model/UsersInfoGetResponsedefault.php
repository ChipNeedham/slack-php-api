<?php

namespace JoliCode\Slack\Api\Model;

class UsersInfoGetResponsedefault
{
    /**
     * 
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
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @return string|null
     */
    public function getCallstack() : ?string
    {
        return $this->callstack;
    }
    /**
     * 
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