<?php

namespace JoliCode\Slack\Api\Model;

class ObjsConversationSharesItem
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
    protected $dateCreate;
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
    protected $isActive;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var ObjsTeam|null
     */
    protected $team;
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
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * 
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive) : self
    {
        $this->isActive = $isActive;
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
     * @return ObjsTeam|null
     */
    public function getTeam() : ?ObjsTeam
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param ObjsTeam|null $team
     *
     * @return self
     */
    public function setTeam(?ObjsTeam $team) : self
    {
        $this->team = $team;
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