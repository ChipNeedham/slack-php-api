<?php

namespace JoliCode\Slack\Api\Model;

class ObjsConversation
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
     * @var string[]|null
     */
    protected $connectedTeamIds;
    /**
     * 
     *
     * @var string|null
     */
    protected $conversationHostId;
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
     * @var ObjsConversationDisplayCounts|null
     */
    protected $displayCounts;
    /**
     * 
     *
     * @var string|null
     */
    protected $enterpriseId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $hasPins;
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $internalTeamIds;
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
    protected $isExtShared;
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
    protected $isGlobalShared;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isGroup;
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
    protected $isOpen;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isOrgDefault;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isOrgMandatory;
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
    protected $isStarred;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isThreadOnly;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isUserDeleted;
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
     * @var string|null
     */
    protected $locale;
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
     * @var mixed|null
     */
    protected $parentConversation;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $pendingConnectedTeamIds;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $pendingShared;
    /**
     * 
     *
     * @var int|null
     */
    protected $pinCount;
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
     * @var ObjsConversationPurpose|null
     */
    protected $purpose;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $sharedTeamIds;
    /**
     * 
     *
     * @var ObjsConversationSharesItem[]|null
     */
    protected $shares;
    /**
     * 
     *
     * @var int|null
     */
    protected $timezoneCount;
    /**
     * 
     *
     * @var ObjsConversationTopic|null
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
     * @var string|null
     */
    protected $useCase;
    /**
     * 
     *
     * @var string|null
     */
    protected $user;
    /**
     * 
     *
     * @var int|null
     */
    protected $version;
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
     * @return string[]|null
     */
    public function getConnectedTeamIds() : ?array
    {
        return $this->connectedTeamIds;
    }
    /**
     * 
     *
     * @param string[]|null $connectedTeamIds
     *
     * @return self
     */
    public function setConnectedTeamIds(?array $connectedTeamIds) : self
    {
        $this->connectedTeamIds = $connectedTeamIds;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConversationHostId() : ?string
    {
        return $this->conversationHostId;
    }
    /**
     * 
     *
     * @param string|null $conversationHostId
     *
     * @return self
     */
    public function setConversationHostId(?string $conversationHostId) : self
    {
        $this->conversationHostId = $conversationHostId;
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
     * @return ObjsConversationDisplayCounts|null
     */
    public function getDisplayCounts() : ?ObjsConversationDisplayCounts
    {
        return $this->displayCounts;
    }
    /**
     * 
     *
     * @param ObjsConversationDisplayCounts|null $displayCounts
     *
     * @return self
     */
    public function setDisplayCounts(?ObjsConversationDisplayCounts $displayCounts) : self
    {
        $this->displayCounts = $displayCounts;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEnterpriseId() : ?string
    {
        return $this->enterpriseId;
    }
    /**
     * 
     *
     * @param string|null $enterpriseId
     *
     * @return self
     */
    public function setEnterpriseId(?string $enterpriseId) : self
    {
        $this->enterpriseId = $enterpriseId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getHasPins() : ?bool
    {
        return $this->hasPins;
    }
    /**
     * 
     *
     * @param bool|null $hasPins
     *
     * @return self
     */
    public function setHasPins(?bool $hasPins) : self
    {
        $this->hasPins = $hasPins;
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
     * @return string[]|null
     */
    public function getInternalTeamIds() : ?array
    {
        return $this->internalTeamIds;
    }
    /**
     * 
     *
     * @param string[]|null $internalTeamIds
     *
     * @return self
     */
    public function setInternalTeamIds(?array $internalTeamIds) : self
    {
        $this->internalTeamIds = $internalTeamIds;
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
    public function getIsExtShared() : ?bool
    {
        return $this->isExtShared;
    }
    /**
     * 
     *
     * @param bool|null $isExtShared
     *
     * @return self
     */
    public function setIsExtShared(?bool $isExtShared) : self
    {
        $this->isExtShared = $isExtShared;
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
    public function getIsGlobalShared() : ?bool
    {
        return $this->isGlobalShared;
    }
    /**
     * 
     *
     * @param bool|null $isGlobalShared
     *
     * @return self
     */
    public function setIsGlobalShared(?bool $isGlobalShared) : self
    {
        $this->isGlobalShared = $isGlobalShared;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsGroup() : ?bool
    {
        return $this->isGroup;
    }
    /**
     * 
     *
     * @param bool|null $isGroup
     *
     * @return self
     */
    public function setIsGroup(?bool $isGroup) : self
    {
        $this->isGroup = $isGroup;
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
     * @return bool|null
     */
    public function getIsOrgDefault() : ?bool
    {
        return $this->isOrgDefault;
    }
    /**
     * 
     *
     * @param bool|null $isOrgDefault
     *
     * @return self
     */
    public function setIsOrgDefault(?bool $isOrgDefault) : self
    {
        $this->isOrgDefault = $isOrgDefault;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsOrgMandatory() : ?bool
    {
        return $this->isOrgMandatory;
    }
    /**
     * 
     *
     * @param bool|null $isOrgMandatory
     *
     * @return self
     */
    public function setIsOrgMandatory(?bool $isOrgMandatory) : self
    {
        $this->isOrgMandatory = $isOrgMandatory;
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
    public function getIsStarred() : ?bool
    {
        return $this->isStarred;
    }
    /**
     * 
     *
     * @param bool|null $isStarred
     *
     * @return self
     */
    public function setIsStarred(?bool $isStarred) : self
    {
        $this->isStarred = $isStarred;
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
     * @return bool|null
     */
    public function getIsUserDeleted() : ?bool
    {
        return $this->isUserDeleted;
    }
    /**
     * 
     *
     * @param bool|null $isUserDeleted
     *
     * @return self
     */
    public function setIsUserDeleted(?bool $isUserDeleted) : self
    {
        $this->isUserDeleted = $isUserDeleted;
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
     * @return string|null
     */
    public function getLocale() : ?string
    {
        return $this->locale;
    }
    /**
     * 
     *
     * @param string|null $locale
     *
     * @return self
     */
    public function setLocale(?string $locale) : self
    {
        $this->locale = $locale;
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
     * @return mixed
     */
    public function getParentConversation()
    {
        return $this->parentConversation;
    }
    /**
     * 
     *
     * @param mixed $parentConversation
     *
     * @return self
     */
    public function setParentConversation($parentConversation) : self
    {
        $this->parentConversation = $parentConversation;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getPendingConnectedTeamIds() : ?array
    {
        return $this->pendingConnectedTeamIds;
    }
    /**
     * 
     *
     * @param string[]|null $pendingConnectedTeamIds
     *
     * @return self
     */
    public function setPendingConnectedTeamIds(?array $pendingConnectedTeamIds) : self
    {
        $this->pendingConnectedTeamIds = $pendingConnectedTeamIds;
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
     * @return int|null
     */
    public function getPinCount() : ?int
    {
        return $this->pinCount;
    }
    /**
     * 
     *
     * @param int|null $pinCount
     *
     * @return self
     */
    public function setPinCount(?int $pinCount) : self
    {
        $this->pinCount = $pinCount;
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
     * @return ObjsConversationPurpose|null
     */
    public function getPurpose() : ?ObjsConversationPurpose
    {
        return $this->purpose;
    }
    /**
     * 
     *
     * @param ObjsConversationPurpose|null $purpose
     *
     * @return self
     */
    public function setPurpose(?ObjsConversationPurpose $purpose) : self
    {
        $this->purpose = $purpose;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getSharedTeamIds() : ?array
    {
        return $this->sharedTeamIds;
    }
    /**
     * 
     *
     * @param string[]|null $sharedTeamIds
     *
     * @return self
     */
    public function setSharedTeamIds(?array $sharedTeamIds) : self
    {
        $this->sharedTeamIds = $sharedTeamIds;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsConversationSharesItem[]|null
     */
    public function getShares() : ?array
    {
        return $this->shares;
    }
    /**
     * 
     *
     * @param ObjsConversationSharesItem[]|null $shares
     *
     * @return self
     */
    public function setShares(?array $shares) : self
    {
        $this->shares = $shares;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTimezoneCount() : ?int
    {
        return $this->timezoneCount;
    }
    /**
     * 
     *
     * @param int|null $timezoneCount
     *
     * @return self
     */
    public function setTimezoneCount(?int $timezoneCount) : self
    {
        $this->timezoneCount = $timezoneCount;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsConversationTopic|null
     */
    public function getTopic() : ?ObjsConversationTopic
    {
        return $this->topic;
    }
    /**
     * 
     *
     * @param ObjsConversationTopic|null $topic
     *
     * @return self
     */
    public function setTopic(?ObjsConversationTopic $topic) : self
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
    /**
     * 
     *
     * @return string|null
     */
    public function getUseCase() : ?string
    {
        return $this->useCase;
    }
    /**
     * 
     *
     * @param string|null $useCase
     *
     * @return self
     */
    public function setUseCase(?string $useCase) : self
    {
        $this->useCase = $useCase;
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
    /**
     * 
     *
     * @return int|null
     */
    public function getVersion() : ?int
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param int|null $version
     *
     * @return self
     */
    public function setVersion(?int $version) : self
    {
        $this->version = $version;
        return $this;
    }
}