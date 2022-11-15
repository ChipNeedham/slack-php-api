<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsOpenPostResponse200ChannelItem1
{
    /**
     * 
     *
     * @var string|null
     */
    protected $created;
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isIm;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isOpen;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastRead;
    /**
     * 
     *
     * @var ObjsMessage|null
     */
    protected $latest;
    /**
     * 
     *
     * @var float|null
     */
    protected $unreadCount;
    /**
     * 
     *
     * @var float|null
     */
    protected $unreadCountDisplay;
    /**
     * 
     *
     * @var string|null
     */
    protected $user;
    /**
     * 
     *
     * @return string|null
     */
    public function getCreated() : ?string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string|null $created
     *
     * @return self
     */
    public function setCreated(?string $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsIm() : ?bool
    {
        return $this->isIm;
    }
    /**
     * 
     *
     * @param bool|null $isIm
     *
     * @return self
     */
    public function setIsIm(?bool $isIm) : self
    {
        $this->isIm = $isIm;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsOpen() : ?bool
    {
        return $this->isOpen;
    }
    /**
     * 
     *
     * @param bool|null $isOpen
     *
     * @return self
     */
    public function setIsOpen(?bool $isOpen) : self
    {
        $this->isOpen = $isOpen;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastRead() : ?string
    {
        return $this->lastRead;
    }
    /**
     * 
     *
     * @param string|null $lastRead
     *
     * @return self
     */
    public function setLastRead(?string $lastRead) : self
    {
        $this->lastRead = $lastRead;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsMessage|null
     */
    public function getLatest() : ?ObjsMessage
    {
        return $this->latest;
    }
    /**
     * 
     *
     * @param ObjsMessage|null $latest
     *
     * @return self
     */
    public function setLatest(?ObjsMessage $latest) : self
    {
        $this->latest = $latest;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUnreadCount() : ?float
    {
        return $this->unreadCount;
    }
    /**
     * 
     *
     * @param float|null $unreadCount
     *
     * @return self
     */
    public function setUnreadCount(?float $unreadCount) : self
    {
        $this->unreadCount = $unreadCount;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUnreadCountDisplay() : ?float
    {
        return $this->unreadCountDisplay;
    }
    /**
     * 
     *
     * @param float|null $unreadCountDisplay
     *
     * @return self
     */
    public function setUnreadCountDisplay(?float $unreadCountDisplay) : self
    {
        $this->unreadCountDisplay = $unreadCountDisplay;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUser() : ?string
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string|null $user
     *
     * @return self
     */
    public function setUser(?string $user) : self
    {
        $this->user = $user;
        return $this;
    }
}