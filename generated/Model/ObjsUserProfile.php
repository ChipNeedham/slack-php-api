<?php

namespace JoliCode\Slack\Api\Model;

class ObjsUserProfile
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $alwaysActive;
    /**
     * 
     *
     * @var string|null
     */
    protected $apiAppId;
    /**
     * 
     *
     * @var string|null
     */
    protected $avatarHash;
    /**
     * 
     *
     * @var string|null
     */
    protected $botId;
    /**
     * 
     *
     * @var string|null
     */
    protected $displayName;
    /**
     * 
     *
     * @var string|null
     */
    protected $displayNameNormalized;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var mixed[]|mixed|null
     */
    protected $fields;
    /**
     * 
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * 
     *
     * @var int|null
     */
    protected $guestExpirationTs;
    /**
     * 
     *
     * @var string|null
     */
    protected $guestInvitedBy;
    /**
     * 
     *
     * @var string|null
     */
    protected $image1024;
    /**
     * 
     *
     * @var string|null
     */
    protected $image192;
    /**
     * 
     *
     * @var string|null
     */
    protected $image24;
    /**
     * 
     *
     * @var string|null
     */
    protected $image32;
    /**
     * 
     *
     * @var string|null
     */
    protected $image48;
    /**
     * 
     *
     * @var string|null
     */
    protected $image512;
    /**
     * 
     *
     * @var string|null
     */
    protected $image72;
    /**
     * 
     *
     * @var string|null
     */
    protected $imageOriginal;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isAppUser;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isCustomImage;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isRestricted;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isUltraRestricted;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastAvatarImageHash;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * 
     *
     * @var int|null
     */
    protected $membershipsCount;
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
    protected $phone;
    /**
     * 
     *
     * @var string|null
     */
    protected $pronouns;
    /**
     * 
     *
     * @var string|null
     */
    protected $realName;
    /**
     * 
     *
     * @var string|null
     */
    protected $realNameNormalized;
    /**
     * 
     *
     * @var string|null
     */
    protected $skype;
    /**
     * 
     *
     * @var string|null
     */
    protected $statusDefaultEmoji;
    /**
     * 
     *
     * @var string|null
     */
    protected $statusDefaultText;
    /**
     * 
     *
     * @var string|null
     */
    protected $statusDefaultTextCanonical;
    /**
     * 
     *
     * @var string|null
     */
    protected $statusEmoji;
    /**
     * 
     *
     * @var int|null
     */
    protected $statusExpiration;
    /**
     * 
     *
     * @var string|null
     */
    protected $statusText;
    /**
     * 
     *
     * @var string|null
     */
    protected $statusTextCanonical;
    /**
     * 
     *
     * @var string|null
     */
    protected $team;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var int|null
     */
    protected $updated;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
    /**
     * 
     *
     * @var string|null
     */
    protected $username;
    /**
     * 
     *
     * @return bool|null
     */
    public function getAlwaysActive() : ?bool
    {
        return $this->alwaysActive;
    }
    /**
     * 
     *
     * @param bool|null $alwaysActive
     *
     * @return self
     */
    public function setAlwaysActive(?bool $alwaysActive) : self
    {
        $this->alwaysActive = $alwaysActive;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getApiAppId() : ?string
    {
        return $this->apiAppId;
    }
    /**
     * 
     *
     * @param string|null $apiAppId
     *
     * @return self
     */
    public function setApiAppId(?string $apiAppId) : self
    {
        $this->apiAppId = $apiAppId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAvatarHash() : ?string
    {
        return $this->avatarHash;
    }
    /**
     * 
     *
     * @param string|null $avatarHash
     *
     * @return self
     */
    public function setAvatarHash(?string $avatarHash) : self
    {
        $this->avatarHash = $avatarHash;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBotId() : ?string
    {
        return $this->botId;
    }
    /**
     * 
     *
     * @param string|null $botId
     *
     * @return self
     */
    public function setBotId(?string $botId) : self
    {
        $this->botId = $botId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDisplayName() : ?string
    {
        return $this->displayName;
    }
    /**
     * 
     *
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName) : self
    {
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDisplayNameNormalized() : ?string
    {
        return $this->displayNameNormalized;
    }
    /**
     * 
     *
     * @param string|null $displayNameNormalized
     *
     * @return self
     */
    public function setDisplayNameNormalized(?string $displayNameNormalized) : self
    {
        $this->displayNameNormalized = $displayNameNormalized;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|mixed
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * 
     *
     * @param mixed[]|mixed $fields
     *
     * @return self
     */
    public function setFields($fields) : self
    {
        $this->fields = $fields;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGuestExpirationTs() : ?int
    {
        return $this->guestExpirationTs;
    }
    /**
     * 
     *
     * @param int|null $guestExpirationTs
     *
     * @return self
     */
    public function setGuestExpirationTs(?int $guestExpirationTs) : self
    {
        $this->guestExpirationTs = $guestExpirationTs;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGuestInvitedBy() : ?string
    {
        return $this->guestInvitedBy;
    }
    /**
     * 
     *
     * @param string|null $guestInvitedBy
     *
     * @return self
     */
    public function setGuestInvitedBy(?string $guestInvitedBy) : self
    {
        $this->guestInvitedBy = $guestInvitedBy;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage1024() : ?string
    {
        return $this->image1024;
    }
    /**
     * 
     *
     * @param string|null $image1024
     *
     * @return self
     */
    public function setImage1024(?string $image1024) : self
    {
        $this->image1024 = $image1024;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage192() : ?string
    {
        return $this->image192;
    }
    /**
     * 
     *
     * @param string|null $image192
     *
     * @return self
     */
    public function setImage192(?string $image192) : self
    {
        $this->image192 = $image192;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage24() : ?string
    {
        return $this->image24;
    }
    /**
     * 
     *
     * @param string|null $image24
     *
     * @return self
     */
    public function setImage24(?string $image24) : self
    {
        $this->image24 = $image24;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage32() : ?string
    {
        return $this->image32;
    }
    /**
     * 
     *
     * @param string|null $image32
     *
     * @return self
     */
    public function setImage32(?string $image32) : self
    {
        $this->image32 = $image32;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage48() : ?string
    {
        return $this->image48;
    }
    /**
     * 
     *
     * @param string|null $image48
     *
     * @return self
     */
    public function setImage48(?string $image48) : self
    {
        $this->image48 = $image48;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage512() : ?string
    {
        return $this->image512;
    }
    /**
     * 
     *
     * @param string|null $image512
     *
     * @return self
     */
    public function setImage512(?string $image512) : self
    {
        $this->image512 = $image512;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage72() : ?string
    {
        return $this->image72;
    }
    /**
     * 
     *
     * @param string|null $image72
     *
     * @return self
     */
    public function setImage72(?string $image72) : self
    {
        $this->image72 = $image72;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImageOriginal() : ?string
    {
        return $this->imageOriginal;
    }
    /**
     * 
     *
     * @param string|null $imageOriginal
     *
     * @return self
     */
    public function setImageOriginal(?string $imageOriginal) : self
    {
        $this->imageOriginal = $imageOriginal;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsAppUser() : ?bool
    {
        return $this->isAppUser;
    }
    /**
     * 
     *
     * @param bool|null $isAppUser
     *
     * @return self
     */
    public function setIsAppUser(?bool $isAppUser) : self
    {
        $this->isAppUser = $isAppUser;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsCustomImage() : ?bool
    {
        return $this->isCustomImage;
    }
    /**
     * 
     *
     * @param bool|null $isCustomImage
     *
     * @return self
     */
    public function setIsCustomImage(?bool $isCustomImage) : self
    {
        $this->isCustomImage = $isCustomImage;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsRestricted() : ?bool
    {
        return $this->isRestricted;
    }
    /**
     * 
     *
     * @param bool|null $isRestricted
     *
     * @return self
     */
    public function setIsRestricted(?bool $isRestricted) : self
    {
        $this->isRestricted = $isRestricted;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsUltraRestricted() : ?bool
    {
        return $this->isUltraRestricted;
    }
    /**
     * 
     *
     * @param bool|null $isUltraRestricted
     *
     * @return self
     */
    public function setIsUltraRestricted(?bool $isUltraRestricted) : self
    {
        $this->isUltraRestricted = $isUltraRestricted;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastAvatarImageHash() : ?string
    {
        return $this->lastAvatarImageHash;
    }
    /**
     * 
     *
     * @param string|null $lastAvatarImageHash
     *
     * @return self
     */
    public function setLastAvatarImageHash(?string $lastAvatarImageHash) : self
    {
        $this->lastAvatarImageHash = $lastAvatarImageHash;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMembershipsCount() : ?int
    {
        return $this->membershipsCount;
    }
    /**
     * 
     *
     * @param int|null $membershipsCount
     *
     * @return self
     */
    public function setMembershipsCount(?int $membershipsCount) : self
    {
        $this->membershipsCount = $membershipsCount;
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
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPronouns() : ?string
    {
        return $this->pronouns;
    }
    /**
     * 
     *
     * @param string|null $pronouns
     *
     * @return self
     */
    public function setPronouns(?string $pronouns) : self
    {
        $this->pronouns = $pronouns;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRealName() : ?string
    {
        return $this->realName;
    }
    /**
     * 
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setRealName(?string $realName) : self
    {
        $this->realName = $realName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRealNameNormalized() : ?string
    {
        return $this->realNameNormalized;
    }
    /**
     * 
     *
     * @param string|null $realNameNormalized
     *
     * @return self
     */
    public function setRealNameNormalized(?string $realNameNormalized) : self
    {
        $this->realNameNormalized = $realNameNormalized;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSkype() : ?string
    {
        return $this->skype;
    }
    /**
     * 
     *
     * @param string|null $skype
     *
     * @return self
     */
    public function setSkype(?string $skype) : self
    {
        $this->skype = $skype;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatusDefaultEmoji() : ?string
    {
        return $this->statusDefaultEmoji;
    }
    /**
     * 
     *
     * @param string|null $statusDefaultEmoji
     *
     * @return self
     */
    public function setStatusDefaultEmoji(?string $statusDefaultEmoji) : self
    {
        $this->statusDefaultEmoji = $statusDefaultEmoji;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatusDefaultText() : ?string
    {
        return $this->statusDefaultText;
    }
    /**
     * 
     *
     * @param string|null $statusDefaultText
     *
     * @return self
     */
    public function setStatusDefaultText(?string $statusDefaultText) : self
    {
        $this->statusDefaultText = $statusDefaultText;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatusDefaultTextCanonical() : ?string
    {
        return $this->statusDefaultTextCanonical;
    }
    /**
     * 
     *
     * @param string|null $statusDefaultTextCanonical
     *
     * @return self
     */
    public function setStatusDefaultTextCanonical(?string $statusDefaultTextCanonical) : self
    {
        $this->statusDefaultTextCanonical = $statusDefaultTextCanonical;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatusEmoji() : ?string
    {
        return $this->statusEmoji;
    }
    /**
     * 
     *
     * @param string|null $statusEmoji
     *
     * @return self
     */
    public function setStatusEmoji(?string $statusEmoji) : self
    {
        $this->statusEmoji = $statusEmoji;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStatusExpiration() : ?int
    {
        return $this->statusExpiration;
    }
    /**
     * 
     *
     * @param int|null $statusExpiration
     *
     * @return self
     */
    public function setStatusExpiration(?int $statusExpiration) : self
    {
        $this->statusExpiration = $statusExpiration;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatusText() : ?string
    {
        return $this->statusText;
    }
    /**
     * 
     *
     * @param string|null $statusText
     *
     * @return self
     */
    public function setStatusText(?string $statusText) : self
    {
        $this->statusText = $statusText;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatusTextCanonical() : ?string
    {
        return $this->statusTextCanonical;
    }
    /**
     * 
     *
     * @param string|null $statusTextCanonical
     *
     * @return self
     */
    public function setStatusTextCanonical(?string $statusTextCanonical) : self
    {
        $this->statusTextCanonical = $statusTextCanonical;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeam() : ?string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string|null $team
     *
     * @return self
     */
    public function setTeam(?string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUpdated() : ?int
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param int|null $updated
     *
     * @return self
     */
    public function setUpdated(?int $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId() : ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->username = $username;
        return $this;
    }
}