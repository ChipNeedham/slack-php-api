<?php

namespace JoliCode\Slack\Api\Model;

class ObjsUserProfileShort
{
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
    protected $firstName;
    /**
     * 
     *
     * @var string|null
     */
    protected $image72;
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
    protected $name;
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
    protected $team;
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
}