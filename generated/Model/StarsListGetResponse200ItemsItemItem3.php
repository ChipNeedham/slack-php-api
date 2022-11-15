<?php

namespace JoliCode\Slack\Api\Model;

class StarsListGetResponse200ItemsItemItem3
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
     * @var int|null
     */
    protected $dateCreate;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
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
     * @return int|null
     */
    public function getDateCreate() : ?int
    {
        return $this->dateCreate;
    }
    /**
     * 
     *
     * @param int|null $dateCreate
     *
     * @return self
     */
    public function setDateCreate(?int $dateCreate) : self
    {
        $this->dateCreate = $dateCreate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}