<?php

namespace JoliCode\Slack\Api\Model;

class ApiTestGetResponse200 extends \ArrayObject
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