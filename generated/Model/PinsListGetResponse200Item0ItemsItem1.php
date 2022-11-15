<?php

namespace JoliCode\Slack\Api\Model;

class PinsListGetResponse200Item0ItemsItem1
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
    protected $created;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * 
     *
     * @var ObjsMessage|null
     */
    protected $message;
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
    public function getCreated() : ?int
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param int|null $created
     *
     * @return self
     */
    public function setCreated(?int $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatedBy() : ?string
    {
        return $this->createdBy;
    }
    /**
     * 
     *
     * @param string|null $createdBy
     *
     * @return self
     */
    public function setCreatedBy(?string $createdBy) : self
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsMessage|null
     */
    public function getMessage() : ?ObjsMessage
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param ObjsMessage|null $message
     *
     * @return self
     */
    public function setMessage(?ObjsMessage $message) : self
    {
        $this->message = $message;
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