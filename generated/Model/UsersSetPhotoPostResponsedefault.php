<?php

namespace JoliCode\Slack\Api\Model;

class UsersSetPhotoPostResponsedefault
{
    /**
     * Note: PHP callstack is only visible in dev/qa
     *
     * @var string|null
     */
    protected $callstack;
    /**
     * possibly DEV/QA only
     *
     * @var string|null
     */
    protected $debugStep;
    /**
     * possibly DEV/QA only
     *
     * @var string|null
     */
    protected $dims;
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
     * possibly DEV/QA only
     *
     * @var int|null
     */
    protected $timeIdent;
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
     * possibly DEV/QA only
     *
     * @return string|null
     */
    public function getDebugStep() : ?string
    {
        return $this->debugStep;
    }
    /**
     * possibly DEV/QA only
     *
     * @param string|null $debugStep
     *
     * @return self
     */
    public function setDebugStep(?string $debugStep) : self
    {
        $this->debugStep = $debugStep;
        return $this;
    }
    /**
     * possibly DEV/QA only
     *
     * @return string|null
     */
    public function getDims() : ?string
    {
        return $this->dims;
    }
    /**
     * possibly DEV/QA only
     *
     * @param string|null $dims
     *
     * @return self
     */
    public function setDims(?string $dims) : self
    {
        $this->dims = $dims;
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
    /**
     * possibly DEV/QA only
     *
     * @return int|null
     */
    public function getTimeIdent() : ?int
    {
        return $this->timeIdent;
    }
    /**
     * possibly DEV/QA only
     *
     * @param int|null $timeIdent
     *
     * @return self
     */
    public function setTimeIdent(?int $timeIdent) : self
    {
        $this->timeIdent = $timeIdent;
        return $this;
    }
}