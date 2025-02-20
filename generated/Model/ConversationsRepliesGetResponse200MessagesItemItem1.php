<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsRepliesGetResponse200MessagesItemItem1
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $isStarred;
    /**
     * 
     *
     * @var string|null
     */
    protected $parentUserId;
    /**
     * 
     *
     * @var string|null
     */
    protected $sourceTeam;
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
    protected $text;
    /**
     * 
     *
     * @var string|null
     */
    protected $threadTs;
    /**
     * 
     *
     * @var string|null
     */
    protected $ts;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string|null
     */
    protected $user;
    /**
     * 
     *
     * @var ObjsUserProfileShort|null
     */
    protected $userProfile;
    /**
     * 
     *
     * @var string|null
     */
    protected $userTeam;
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
     * @return string|null
     */
    public function getParentUserId() : ?string
    {
        return $this->parentUserId;
    }
    /**
     * 
     *
     * @param string|null $parentUserId
     *
     * @return self
     */
    public function setParentUserId(?string $parentUserId) : self
    {
        $this->parentUserId = $parentUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSourceTeam() : ?string
    {
        return $this->sourceTeam;
    }
    /**
     * 
     *
     * @param string|null $sourceTeam
     *
     * @return self
     */
    public function setSourceTeam(?string $sourceTeam) : self
    {
        $this->sourceTeam = $sourceTeam;
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
    public function getText() : ?string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string|null $text
     *
     * @return self
     */
    public function setText(?string $text) : self
    {
        $this->text = $text;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThreadTs() : ?string
    {
        return $this->threadTs;
    }
    /**
     * 
     *
     * @param string|null $threadTs
     *
     * @return self
     */
    public function setThreadTs(?string $threadTs) : self
    {
        $this->threadTs = $threadTs;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTs() : ?string
    {
        return $this->ts;
    }
    /**
     * 
     *
     * @param string|null $ts
     *
     * @return self
     */
    public function setTs(?string $ts) : self
    {
        $this->ts = $ts;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
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
     * @return ObjsUserProfileShort|null
     */
    public function getUserProfile() : ?ObjsUserProfileShort
    {
        return $this->userProfile;
    }
    /**
     * 
     *
     * @param ObjsUserProfileShort|null $userProfile
     *
     * @return self
     */
    public function setUserProfile(?ObjsUserProfileShort $userProfile) : self
    {
        $this->userProfile = $userProfile;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserTeam() : ?string
    {
        return $this->userTeam;
    }
    /**
     * 
     *
     * @param string|null $userTeam
     *
     * @return self
     */
    public function setUserTeam(?string $userTeam) : self
    {
        $this->userTeam = $userTeam;
        return $this;
    }
}