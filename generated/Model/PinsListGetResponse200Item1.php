<?php

namespace JoliCode\Slack\Api\Model;

class PinsListGetResponse200Item1
{
    /**
     * 
     *
     * @var int|null
     */
    protected $count;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @return int|null
     */
    public function getCount() : ?int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int|null $count
     *
     * @return self
     */
    public function setCount(?int $count) : self
    {
        $this->count = $count;
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