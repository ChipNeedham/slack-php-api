<?php

namespace JoliCode\Slack\Api\Model;

class ObjsChannel
{
    /**
     * 
     *
     * @var string|null
     */
    protected $acceptedUser;
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
    protected $creator;
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
    protected $isArchived;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isChannel;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isFrozen;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isGeneral;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isMember;
    /**
     * 
     *
     * @var int|null
     */
    protected $isMoved;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isMpim;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isNonThreadable;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isOrgShared;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isPendingExtShared;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isPrivate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isReadOnly;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isShared;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isThreadOnly;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastRead;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $latest;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $members;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $nameNormalized;
    /**
     * 
     *
     * @var int|null
     */
    protected $numMembers;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $pendingShared;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $previousNames;
    /**
     * 
     *
     * @var float|null
     */
    protected $priority;
    /**
     * 
     *
     * @var ObjsChannelPurpose|null
     */
    protected $purpose;
    /**
     * 
     *
     * @var ObjsChannelTopic|null
     */
    protected $topic;
    /**
     * 
     *
     * @var int|null
     */
    protected $unlinked;
    /**
     * 
     *
     * @var int|null
     */
    protected $unreadCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $unreadCountDisplay;
    /**
     * 
     *
     * @return string|null
     */
    public function getAcceptedUser() : ?string
    {
        return $this->acceptedUser;
    }
    /**
     * 
     *
     * @param string|null $acceptedUser
     *
     * @return self
     */
    public function setAcceptedUser(?string $acceptedUser) : self
    {
        $this->acceptedUser = $acceptedUser;
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
    public function getCreator() : ?string
    {
        return $this->creator;
    }
    /**
     * 
     *
     * @param string|null $creator
     *
     * @return self
     */
    public function setCreator(?string $creator) : self
    {
        $this->creator = $creator;
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
    public function getIsArchived() : ?bool
    {
        return $this->isArchived;
    }
    /**
     * 
     *
     * @param bool|null $isArchived
     *
     * @return self
     */
    public function setIsArchived(?bool $isArchived) : self
    {
        $this->isArchived = $isArchived;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsChannel() : ?bool
    {
        return $this->isChannel;
    }
    /**
     * 
     *
     * @param bool|null $isChannel
     *
     * @return self
     */
    public function setIsChannel(?bool $isChannel) : self
    {
        $this->isChannel = $isChannel;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsFrozen() : ?bool
    {
        return $this->isFrozen;
    }
    /**
     * 
     *
     * @param bool|null $isFrozen
     *
     * @return self
     */
    public function setIsFrozen(?bool $isFrozen) : self
    {
        $this->isFrozen = $isFrozen;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsGeneral() : ?bool
    {
        return $this->isGeneral;
    }
    /**
     * 
     *
     * @param bool|null $isGeneral
     *
     * @return self
     */
    public function setIsGeneral(?bool $isGeneral) : self
    {
        $this->isGeneral = $isGeneral;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsMember() : ?bool
    {
        return $this->isMember;
    }
    /**
     * 
     *
     * @param bool|null $isMember
     *
     * @return self
     */
    public function setIsMember(?bool $isMember) : self
    {
        $this->isMember = $isMember;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getIsMoved() : ?int
    {
        return $this->isMoved;
    }
    /**
     * 
     *
     * @param int|null $isMoved
     *
     * @return self
     */
    public function setIsMoved(?int $isMoved) : self
    {
        $this->isMoved = $isMoved;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsMpim() : ?bool
    {
        return $this->isMpim;
    }
    /**
     * 
     *
     * @param bool|null $isMpim
     *
     * @return self
     */
    public function setIsMpim(?bool $isMpim) : self
    {
        $this->isMpim = $isMpim;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsNonThreadable() : ?bool
    {
        return $this->isNonThreadable;
    }
    /**
     * 
     *
     * @param bool|null $isNonThreadable
     *
     * @return self
     */
    public function setIsNonThreadable(?bool $isNonThreadable) : self
    {
        $this->isNonThreadable = $isNonThreadable;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsOrgShared() : ?bool
    {
        return $this->isOrgShared;
    }
    /**
     * 
     *
     * @param bool|null $isOrgShared
     *
     * @return self
     */
    public function setIsOrgShared(?bool $isOrgShared) : self
    {
        $this->isOrgShared = $isOrgShared;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsPendingExtShared() : ?bool
    {
        return $this->isPendingExtShared;
    }
    /**
     * 
     *
     * @param bool|null $isPendingExtShared
     *
     * @return self
     */
    public function setIsPendingExtShared(?bool $isPendingExtShared) : self
    {
        $this->isPendingExtShared = $isPendingExtShared;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsPrivate() : ?bool
    {
        return $this->isPrivate;
    }
    /**
     * 
     *
     * @param bool|null $isPrivate
     *
     * @return self
     */
    public function setIsPrivate(?bool $isPrivate) : self
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsReadOnly() : ?bool
    {
        return $this->isReadOnly;
    }
    /**
     * 
     *
     * @param bool|null $isReadOnly
     *
     * @return self
     */
    public function setIsReadOnly(?bool $isReadOnly) : self
    {
        $this->isReadOnly = $isReadOnly;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsShared() : ?bool
    {
        return $this->isShared;
    }
    /**
     * 
     *
     * @param bool|null $isShared
     *
     * @return self
     */
    public function setIsShared(?bool $isShared) : self
    {
        $this->isShared = $isShared;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsThreadOnly() : ?bool
    {
        return $this->isThreadOnly;
    }
    /**
     * 
     *
     * @param bool|null $isThreadOnly
     *
     * @return self
     */
    public function setIsThreadOnly(?bool $isThreadOnly) : self
    {
        $this->isThreadOnly = $isThreadOnly;
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
     * @return mixed
     */
    public function getLatest()
    {
        return $this->latest;
    }
    /**
     * 
     *
     * @param mixed $latest
     *
     * @return self
     */
    public function setLatest($latest) : self
    {
        $this->latest = $latest;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getMembers() : ?array
    {
        return $this->members;
    }
    /**
     * 
     *
     * @param string[]|null $members
     *
     * @return self
     */
    public function setMembers(?array $members) : self
    {
        $this->members = $members;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNameNormalized() : ?string
    {
        return $this->nameNormalized;
    }
    /**
     * 
     *
     * @param string|null $nameNormalized
     *
     * @return self
     */
    public function setNameNormalized(?string $nameNormalized) : self
    {
        $this->nameNormalized = $nameNormalized;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNumMembers() : ?int
    {
        return $this->numMembers;
    }
    /**
     * 
     *
     * @param int|null $numMembers
     *
     * @return self
     */
    public function setNumMembers(?int $numMembers) : self
    {
        $this->numMembers = $numMembers;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getPendingShared() : ?array
    {
        return $this->pendingShared;
    }
    /**
     * 
     *
     * @param string[]|null $pendingShared
     *
     * @return self
     */
    public function setPendingShared(?array $pendingShared) : self
    {
        $this->pendingShared = $pendingShared;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getPreviousNames() : ?array
    {
        return $this->previousNames;
    }
    /**
     * 
     *
     * @param string[]|null $previousNames
     *
     * @return self
     */
    public function setPreviousNames(?array $previousNames) : self
    {
        $this->previousNames = $previousNames;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPriority() : ?float
    {
        return $this->priority;
    }
    /**
     * 
     *
     * @param float|null $priority
     *
     * @return self
     */
    public function setPriority(?float $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsChannelPurpose|null
     */
    public function getPurpose() : ?ObjsChannelPurpose
    {
        return $this->purpose;
    }
    /**
     * 
     *
     * @param ObjsChannelPurpose|null $purpose
     *
     * @return self
     */
    public function setPurpose(?ObjsChannelPurpose $purpose) : self
    {
        $this->purpose = $purpose;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsChannelTopic|null
     */
    public function getTopic() : ?ObjsChannelTopic
    {
        return $this->topic;
    }
    /**
     * 
     *
     * @param ObjsChannelTopic|null $topic
     *
     * @return self
     */
    public function setTopic(?ObjsChannelTopic $topic) : self
    {
        $this->topic = $topic;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnlinked() : ?int
    {
        return $this->unlinked;
    }
    /**
     * 
     *
     * @param int|null $unlinked
     *
     * @return self
     */
    public function setUnlinked(?int $unlinked) : self
    {
        $this->unlinked = $unlinked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnreadCount() : ?int
    {
        return $this->unreadCount;
    }
    /**
     * 
     *
     * @param int|null $unreadCount
     *
     * @return self
     */
    public function setUnreadCount(?int $unreadCount) : self
    {
        $this->unreadCount = $unreadCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnreadCountDisplay() : ?int
    {
        return $this->unreadCountDisplay;
    }
    /**
     * 
     *
     * @param int|null $unreadCountDisplay
     *
     * @return self
     */
    public function setUnreadCountDisplay(?int $unreadCountDisplay) : self
    {
        $this->unreadCountDisplay = $unreadCountDisplay;
        return $this;
    }
}