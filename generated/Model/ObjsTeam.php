<?php

namespace JoliCode\Slack\Api\Model;

class ObjsTeam
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $archived;
    /**
     * 
     *
     * @var string|null
     */
    protected $avatarBaseUrl;
    /**
     * 
     *
     * @var int|null
     */
    protected $created;
    /**
     * 
     *
     * @var int|null
     */
    protected $dateCreate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $discoverable;
    /**
     * 
     *
     * @var string|null
     */
    protected $domain;
    /**
     * 
     *
     * @var string|null
     */
    protected $emailDomain;
    /**
     * 
     *
     * @var string|null
     */
    protected $enterpriseId;
    /**
     * 
     *
     * @var string|null
     */
    protected $enterpriseName;
    /**
     * 
     *
     * @var ObjsExternalOrgMigrations|null
     */
    protected $externalOrgMigrations;
    /**
     * 
     *
     * @var bool|null
     */
    protected $hasComplianceExport;
    /**
     * 
     *
     * @var ObjsIcon|null
     */
    protected $icon;
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
    protected $isAssigned;
    /**
     * 
     *
     * @var int|null
     */
    protected $isEnterprise;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isOverStorageLimit;
    /**
     * 
     *
     * @var int|null
     */
    protected $limitTs;
    /**
     * 
     *
     * @var string|null
     */
    protected $locale;
    /**
     * 
     *
     * @var int|null
     */
    protected $messagesCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $msgEditWindowMins;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var bool|null
     */
    protected $overIntegrationsLimit;
    /**
     * 
     *
     * @var bool|null
     */
    protected $overStorageLimit;
    /**
     * 
     *
     * @var string|null
     */
    protected $payProdCur;
    /**
     * 
     *
     * @var string|null
     */
    protected $plan;
    /**
     * 
     *
     * @var ObjsPrimaryOwner|null
     */
    protected $primaryOwner;
    /**
     * 
     *
     * @var ObjsTeamSsoProvider|null
     */
    protected $ssoProvider;
    /**
     * 
     *
     * @return bool|null
     */
    public function getArchived() : ?bool
    {
        return $this->archived;
    }
    /**
     * 
     *
     * @param bool|null $archived
     *
     * @return self
     */
    public function setArchived(?bool $archived) : self
    {
        $this->archived = $archived;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAvatarBaseUrl() : ?string
    {
        return $this->avatarBaseUrl;
    }
    /**
     * 
     *
     * @param string|null $avatarBaseUrl
     *
     * @return self
     */
    public function setAvatarBaseUrl(?string $avatarBaseUrl) : self
    {
        $this->avatarBaseUrl = $avatarBaseUrl;
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
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDiscoverable() : ?string
    {
        return $this->discoverable;
    }
    /**
     * 
     *
     * @param string|null $discoverable
     *
     * @return self
     */
    public function setDiscoverable(?string $discoverable) : self
    {
        $this->discoverable = $discoverable;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDomain() : ?string
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param string|null $domain
     *
     * @return self
     */
    public function setDomain(?string $domain) : self
    {
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmailDomain() : ?string
    {
        return $this->emailDomain;
    }
    /**
     * 
     *
     * @param string|null $emailDomain
     *
     * @return self
     */
    public function setEmailDomain(?string $emailDomain) : self
    {
        $this->emailDomain = $emailDomain;
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
     * @return string|null
     */
    public function getEnterpriseName() : ?string
    {
        return $this->enterpriseName;
    }
    /**
     * 
     *
     * @param string|null $enterpriseName
     *
     * @return self
     */
    public function setEnterpriseName(?string $enterpriseName) : self
    {
        $this->enterpriseName = $enterpriseName;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsExternalOrgMigrations|null
     */
    public function getExternalOrgMigrations() : ?ObjsExternalOrgMigrations
    {
        return $this->externalOrgMigrations;
    }
    /**
     * 
     *
     * @param ObjsExternalOrgMigrations|null $externalOrgMigrations
     *
     * @return self
     */
    public function setExternalOrgMigrations(?ObjsExternalOrgMigrations $externalOrgMigrations) : self
    {
        $this->externalOrgMigrations = $externalOrgMigrations;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getHasComplianceExport() : ?bool
    {
        return $this->hasComplianceExport;
    }
    /**
     * 
     *
     * @param bool|null $hasComplianceExport
     *
     * @return self
     */
    public function setHasComplianceExport(?bool $hasComplianceExport) : self
    {
        $this->hasComplianceExport = $hasComplianceExport;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsIcon|null
     */
    public function getIcon() : ?ObjsIcon
    {
        return $this->icon;
    }
    /**
     * 
     *
     * @param ObjsIcon|null $icon
     *
     * @return self
     */
    public function setIcon(?ObjsIcon $icon) : self
    {
        $this->icon = $icon;
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
    public function getIsAssigned() : ?bool
    {
        return $this->isAssigned;
    }
    /**
     * 
     *
     * @param bool|null $isAssigned
     *
     * @return self
     */
    public function setIsAssigned(?bool $isAssigned) : self
    {
        $this->isAssigned = $isAssigned;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getIsEnterprise() : ?int
    {
        return $this->isEnterprise;
    }
    /**
     * 
     *
     * @param int|null $isEnterprise
     *
     * @return self
     */
    public function setIsEnterprise(?int $isEnterprise) : self
    {
        $this->isEnterprise = $isEnterprise;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsOverStorageLimit() : ?bool
    {
        return $this->isOverStorageLimit;
    }
    /**
     * 
     *
     * @param bool|null $isOverStorageLimit
     *
     * @return self
     */
    public function setIsOverStorageLimit(?bool $isOverStorageLimit) : self
    {
        $this->isOverStorageLimit = $isOverStorageLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLimitTs() : ?int
    {
        return $this->limitTs;
    }
    /**
     * 
     *
     * @param int|null $limitTs
     *
     * @return self
     */
    public function setLimitTs(?int $limitTs) : self
    {
        $this->limitTs = $limitTs;
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
     * @return int|null
     */
    public function getMessagesCount() : ?int
    {
        return $this->messagesCount;
    }
    /**
     * 
     *
     * @param int|null $messagesCount
     *
     * @return self
     */
    public function setMessagesCount(?int $messagesCount) : self
    {
        $this->messagesCount = $messagesCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMsgEditWindowMins() : ?int
    {
        return $this->msgEditWindowMins;
    }
    /**
     * 
     *
     * @param int|null $msgEditWindowMins
     *
     * @return self
     */
    public function setMsgEditWindowMins(?int $msgEditWindowMins) : self
    {
        $this->msgEditWindowMins = $msgEditWindowMins;
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
     * @return bool|null
     */
    public function getOverIntegrationsLimit() : ?bool
    {
        return $this->overIntegrationsLimit;
    }
    /**
     * 
     *
     * @param bool|null $overIntegrationsLimit
     *
     * @return self
     */
    public function setOverIntegrationsLimit(?bool $overIntegrationsLimit) : self
    {
        $this->overIntegrationsLimit = $overIntegrationsLimit;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOverStorageLimit() : ?bool
    {
        return $this->overStorageLimit;
    }
    /**
     * 
     *
     * @param bool|null $overStorageLimit
     *
     * @return self
     */
    public function setOverStorageLimit(?bool $overStorageLimit) : self
    {
        $this->overStorageLimit = $overStorageLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPayProdCur() : ?string
    {
        return $this->payProdCur;
    }
    /**
     * 
     *
     * @param string|null $payProdCur
     *
     * @return self
     */
    public function setPayProdCur(?string $payProdCur) : self
    {
        $this->payProdCur = $payProdCur;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPlan() : ?string
    {
        return $this->plan;
    }
    /**
     * 
     *
     * @param string|null $plan
     *
     * @return self
     */
    public function setPlan(?string $plan) : self
    {
        $this->plan = $plan;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsPrimaryOwner|null
     */
    public function getPrimaryOwner() : ?ObjsPrimaryOwner
    {
        return $this->primaryOwner;
    }
    /**
     * 
     *
     * @param ObjsPrimaryOwner|null $primaryOwner
     *
     * @return self
     */
    public function setPrimaryOwner(?ObjsPrimaryOwner $primaryOwner) : self
    {
        $this->primaryOwner = $primaryOwner;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsTeamSsoProvider|null
     */
    public function getSsoProvider() : ?ObjsTeamSsoProvider
    {
        return $this->ssoProvider;
    }
    /**
     * 
     *
     * @param ObjsTeamSsoProvider|null $ssoProvider
     *
     * @return self
     */
    public function setSsoProvider(?ObjsTeamSsoProvider $ssoProvider) : self
    {
        $this->ssoProvider = $ssoProvider;
        return $this;
    }
}