<?php

namespace JoliCode\Slack\Api\Model;

class ApiTestGetResponsedefault extends \ArrayObject
{
    /**
     * 
     *
     * @var mixed|null
     */
    protected $args;
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
     * @return mixed
     */
    public function getArgs()
    {
        return $this->args;
    }
    /**
     * 
     *
     * @param mixed $args
     *
     * @return self
     */
    public function setArgs($args) : self
    {
        $this->args = $args;
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