<?php

namespace JoliCode\Slack\Api\Model;

class ObjsUser
{
    /**
     * refercing to bug: https://jira.tinyspeck.com/browse/EVALUE-1559
     *
     * @var string|null
     */
    protected $color;
    /**
     * 
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * 
     *
     * @var ObjsEnterpriseUser|null
     */
    protected $enterpriseUser;
    /**
     * 
     *
     * @var bool|null
     */
    protected $has2fa;
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
    protected $isAdmin;
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
    protected $isBot;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isExternal;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isForgotten;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isInvitedUser;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isOwner;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isPrimaryOwner;
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
    protected $isStranger;
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
    protected $locale;
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
    protected $presence;
    /**
     * 
     *
     * @var ObjsUserProfile|null
     */
    protected $profile;
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
    protected $team;
    /**
     * 
     *
     * @var string|null
     */
    protected $teamId;
    /**
     * 
     *
     * @var ObjsUserTeamProfile|null
     */
    protected $teamProfile;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $teams;
    /**
     * 
     *
     * @var string|null
     */
    protected $twoFactorType;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $tz;
    /**
     * 
     *
     * @var string|null
     */
    protected $tzLabel;
    /**
     * 
     *
     * @var float|null
     */
    protected $tzOffset;
    /**
     * 
     *
     * @var float|null
     */
    protected $updated;
    /**
     * refercing to bug: https://jira.tinyspeck.com/browse/EVALUE-1559
     *
     * @return string|null
     */
    public function getColor() : ?string
    {
        return $this->color;
    }
    /**
     * refercing to bug: https://jira.tinyspeck.com/browse/EVALUE-1559
     *
     * @param string|null $color
     *
     * @return self
     */
    public function setColor(?string $color) : self
    {
        $this->color = $color;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDeleted() : ?bool
    {
        return $this->deleted;
    }
    /**
     * 
     *
     * @param bool|null $deleted
     *
     * @return self
     */
    public function setDeleted(?bool $deleted) : self
    {
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsEnterpriseUser|null
     */
    public function getEnterpriseUser() : ?ObjsEnterpriseUser
    {
        return $this->enterpriseUser;
    }
    /**
     * 
     *
     * @param ObjsEnterpriseUser|null $enterpriseUser
     *
     * @return self
     */
    public function setEnterpriseUser(?ObjsEnterpriseUser $enterpriseUser) : self
    {
        $this->enterpriseUser = $enterpriseUser;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getHas2fa() : ?bool
    {
        return $this->has2fa;
    }
    /**
     * 
     *
     * @param bool|null $has2fa
     *
     * @return self
     */
    public function setHas2fa(?bool $has2fa) : self
    {
        $this->has2fa = $has2fa;
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
    public function getIsAdmin() : ?bool
    {
        return $this->isAdmin;
    }
    /**
     * 
     *
     * @param bool|null $isAdmin
     *
     * @return self
     */
    public function setIsAdmin(?bool $isAdmin) : self
    {
        $this->isAdmin = $isAdmin;
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
    public function getIsBot() : ?bool
    {
        return $this->isBot;
    }
    /**
     * 
     *
     * @param bool|null $isBot
     *
     * @return self
     */
    public function setIsBot(?bool $isBot) : self
    {
        $this->isBot = $isBot;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsExternal() : ?bool
    {
        return $this->isExternal;
    }
    /**
     * 
     *
     * @param bool|null $isExternal
     *
     * @return self
     */
    public function setIsExternal(?bool $isExternal) : self
    {
        $this->isExternal = $isExternal;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsForgotten() : ?bool
    {
        return $this->isForgotten;
    }
    /**
     * 
     *
     * @param bool|null $isForgotten
     *
     * @return self
     */
    public function setIsForgotten(?bool $isForgotten) : self
    {
        $this->isForgotten = $isForgotten;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsInvitedUser() : ?bool
    {
        return $this->isInvitedUser;
    }
    /**
     * 
     *
     * @param bool|null $isInvitedUser
     *
     * @return self
     */
    public function setIsInvitedUser(?bool $isInvitedUser) : self
    {
        $this->isInvitedUser = $isInvitedUser;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsOwner() : ?bool
    {
        return $this->isOwner;
    }
    /**
     * 
     *
     * @param bool|null $isOwner
     *
     * @return self
     */
    public function setIsOwner(?bool $isOwner) : self
    {
        $this->isOwner = $isOwner;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsPrimaryOwner() : ?bool
    {
        return $this->isPrimaryOwner;
    }
    /**
     * 
     *
     * @param bool|null $isPrimaryOwner
     *
     * @return self
     */
    public function setIsPrimaryOwner(?bool $isPrimaryOwner) : self
    {
        $this->isPrimaryOwner = $isPrimaryOwner;
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
    public function getIsStranger() : ?bool
    {
        return $this->isStranger;
    }
    /**
     * 
     *
     * @param bool|null $isStranger
     *
     * @return self
     */
    public function setIsStranger(?bool $isStranger) : self
    {
        $this->isStranger = $isStranger;
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
    public function getPresence() : ?string
    {
        return $this->presence;
    }
    /**
     * 
     *
     * @param string|null $presence
     *
     * @return self
     */
    public function setPresence(?string $presence) : self
    {
        $this->presence = $presence;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsUserProfile|null
     */
    public function getProfile() : ?ObjsUserProfile
    {
        return $this->profile;
    }
    /**
     * 
     *
     * @param ObjsUserProfile|null $profile
     *
     * @return self
     */
    public function setProfile(?ObjsUserProfile $profile) : self
    {
        $this->profile = $profile;
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
    public function getTeamId() : ?string
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param string|null $teamId
     *
     * @return self
     */
    public function setTeamId(?string $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsUserTeamProfile|null
     */
    public function getTeamProfile() : ?ObjsUserTeamProfile
    {
        return $this->teamProfile;
    }
    /**
     * 
     *
     * @param ObjsUserTeamProfile|null $teamProfile
     *
     * @return self
     */
    public function setTeamProfile(?ObjsUserTeamProfile $teamProfile) : self
    {
        $this->teamProfile = $teamProfile;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getTeams() : ?array
    {
        return $this->teams;
    }
    /**
     * 
     *
     * @param string[]|null $teams
     *
     * @return self
     */
    public function setTeams(?array $teams) : self
    {
        $this->teams = $teams;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTwoFactorType() : ?string
    {
        return $this->twoFactorType;
    }
    /**
     * 
     *
     * @param string|null $twoFactorType
     *
     * @return self
     */
    public function setTwoFactorType(?string $twoFactorType) : self
    {
        $this->twoFactorType = $twoFactorType;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getTz()
    {
        return $this->tz;
    }
    /**
     * 
     *
     * @param mixed $tz
     *
     * @return self
     */
    public function setTz($tz) : self
    {
        $this->tz = $tz;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTzLabel() : ?string
    {
        return $this->tzLabel;
    }
    /**
     * 
     *
     * @param string|null $tzLabel
     *
     * @return self
     */
    public function setTzLabel(?string $tzLabel) : self
    {
        $this->tzLabel = $tzLabel;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTzOffset() : ?float
    {
        return $this->tzOffset;
    }
    /**
     * 
     *
     * @param float|null $tzOffset
     *
     * @return self
     */
    public function setTzOffset(?float $tzOffset) : self
    {
        $this->tzOffset = $tzOffset;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUpdated() : ?float
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param float|null $updated
     *
     * @return self
     */
    public function setUpdated(?float $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
}