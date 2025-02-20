<?php

namespace JoliCode\Slack\Api\Model;

class ObjsSubteam
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $autoProvision;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $autoType;
    /**
     * 
     *
     * @var int|null
     */
    protected $channelCount;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * 
     *
     * @var int|null
     */
    protected $dateCreate;
    /**
     * 
     *
     * @var int|null
     */
    protected $dateDelete;
    /**
     * 
     *
     * @var int|null
     */
    protected $dateUpdate;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $deletedBy;
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
    protected $enterpriseSubteamId;
    /**
     * 
     *
     * @var string|null
     */
    protected $handle;
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
    protected $isExternal;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isSubteam;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isUsergroup;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var ObjsSubteamPrefs|null
     */
    protected $prefs;
    /**
     * 
     *
     * @var string|null
     */
    protected $teamId;
    /**
     * 
     *
     * @var string|null
     */
    protected $updatedBy;
    /**
     * 
     *
     * @var int|null
     */
    protected $userCount;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $users;
    /**
     * 
     *
     * @return bool|null
     */
    public function getAutoProvision() : ?bool
    {
        return $this->autoProvision;
    }
    /**
     * 
     *
     * @param bool|null $autoProvision
     *
     * @return self
     */
    public function setAutoProvision(?bool $autoProvision) : self
    {
        $this->autoProvision = $autoProvision;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getAutoType()
    {
        return $this->autoType;
    }
    /**
     * 
     *
     * @param mixed $autoType
     *
     * @return self
     */
    public function setAutoType($autoType) : self
    {
        $this->autoType = $autoType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getChannelCount() : ?int
    {
        return $this->channelCount;
    }
    /**
     * 
     *
     * @param int|null $channelCount
     *
     * @return self
     */
    public function setChannelCount(?int $channelCount) : self
    {
        $this->channelCount = $channelCount;
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
     * @return int|null
     */
    public function getDateDelete() : ?int
    {
        return $this->dateDelete;
    }
    /**
     * 
     *
     * @param int|null $dateDelete
     *
     * @return self
     */
    public function setDateDelete(?int $dateDelete) : self
    {
        $this->dateDelete = $dateDelete;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDateUpdate() : ?int
    {
        return $this->dateUpdate;
    }
    /**
     * 
     *
     * @param int|null $dateUpdate
     *
     * @return self
     */
    public function setDateUpdate(?int $dateUpdate) : self
    {
        $this->dateUpdate = $dateUpdate;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }
    /**
     * 
     *
     * @param mixed $deletedBy
     *
     * @return self
     */
    public function setDeletedBy($deletedBy) : self
    {
        $this->deletedBy = $deletedBy;
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
    public function getEnterpriseSubteamId() : ?string
    {
        return $this->enterpriseSubteamId;
    }
    /**
     * 
     *
     * @param string|null $enterpriseSubteamId
     *
     * @return self
     */
    public function setEnterpriseSubteamId(?string $enterpriseSubteamId) : self
    {
        $this->enterpriseSubteamId = $enterpriseSubteamId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHandle() : ?string
    {
        return $this->handle;
    }
    /**
     * 
     *
     * @param string|null $handle
     *
     * @return self
     */
    public function setHandle(?string $handle) : self
    {
        $this->handle = $handle;
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
    public function getIsSubteam() : ?bool
    {
        return $this->isSubteam;
    }
    /**
     * 
     *
     * @param bool|null $isSubteam
     *
     * @return self
     */
    public function setIsSubteam(?bool $isSubteam) : self
    {
        $this->isSubteam = $isSubteam;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsUsergroup() : ?bool
    {
        return $this->isUsergroup;
    }
    /**
     * 
     *
     * @param bool|null $isUsergroup
     *
     * @return self
     */
    public function setIsUsergroup(?bool $isUsergroup) : self
    {
        $this->isUsergroup = $isUsergroup;
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
     * @return ObjsSubteamPrefs|null
     */
    public function getPrefs() : ?ObjsSubteamPrefs
    {
        return $this->prefs;
    }
    /**
     * 
     *
     * @param ObjsSubteamPrefs|null $prefs
     *
     * @return self
     */
    public function setPrefs(?ObjsSubteamPrefs $prefs) : self
    {
        $this->prefs = $prefs;
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
     * @return string|null
     */
    public function getUpdatedBy() : ?string
    {
        return $this->updatedBy;
    }
    /**
     * 
     *
     * @param string|null $updatedBy
     *
     * @return self
     */
    public function setUpdatedBy(?string $updatedBy) : self
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUserCount() : ?int
    {
        return $this->userCount;
    }
    /**
     * 
     *
     * @param int|null $userCount
     *
     * @return self
     */
    public function setUserCount(?int $userCount) : self
    {
        $this->userCount = $userCount;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getUsers() : ?array
    {
        return $this->users;
    }
    /**
     * 
     *
     * @param string[]|null $users
     *
     * @return self
     */
    public function setUsers(?array $users) : self
    {
        $this->users = $users;
        return $this;
    }
}