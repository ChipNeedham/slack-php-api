<?php

namespace JoliCode\Slack\Api\Model;

class ObjsEnterpriseUser
{
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
    protected $isOwner;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $teams;
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
}