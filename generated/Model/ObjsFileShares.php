<?php

namespace JoliCode\Slack\Api\Model;

class ObjsFileShares
{
    /**
     * 
     *
     * @var mixed|null
     */
    protected $private;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $public;
    /**
     * 
     *
     * @return mixed
     */
    public function getPrivate()
    {
        return $this->private;
    }
    /**
     * 
     *
     * @param mixed $private
     *
     * @return self
     */
    public function setPrivate($private) : self
    {
        $this->private = $private;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPublic()
    {
        return $this->public;
    }
    /**
     * 
     *
     * @param mixed $public
     *
     * @return self
     */
    public function setPublic($public) : self
    {
        $this->public = $public;
        return $this;
    }
}