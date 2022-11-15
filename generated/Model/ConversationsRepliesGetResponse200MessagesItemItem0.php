<?php

namespace JoliCode\Slack\Api\Model;

class ConversationsRepliesGetResponse200MessagesItemItem0
{
    /**
     * 
     *
     * @var string|null
     */
    protected $lastRead;
    /**
     * 
     *
     * @var string|null
     */
    protected $latestReply;
    /**
     * 
     *
     * @var int|null
     */
    protected $replyCount;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $replyUsers;
    /**
     * 
     *
     * @var int|null
     */
    protected $replyUsersCount;
    /**
     * 
     *
     * @var string|null
     */
    protected $sourceTeam;
    /**
     * 
     *
     * @var bool|null
     */
    protected $subscribed;
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
     * @var int|null
     */
    protected $unreadCount;
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
     * @return string|null
     */
    public function getLatestReply() : ?string
    {
        return $this->latestReply;
    }
    /**
     * 
     *
     * @param string|null $latestReply
     *
     * @return self
     */
    public function setLatestReply(?string $latestReply) : self
    {
        $this->latestReply = $latestReply;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReplyCount() : ?int
    {
        return $this->replyCount;
    }
    /**
     * 
     *
     * @param int|null $replyCount
     *
     * @return self
     */
    public function setReplyCount(?int $replyCount) : self
    {
        $this->replyCount = $replyCount;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getReplyUsers() : ?array
    {
        return $this->replyUsers;
    }
    /**
     * 
     *
     * @param string[]|null $replyUsers
     *
     * @return self
     */
    public function setReplyUsers(?array $replyUsers) : self
    {
        $this->replyUsers = $replyUsers;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReplyUsersCount() : ?int
    {
        return $this->replyUsersCount;
    }
    /**
     * 
     *
     * @param int|null $replyUsersCount
     *
     * @return self
     */
    public function setReplyUsersCount(?int $replyUsersCount) : self
    {
        $this->replyUsersCount = $replyUsersCount;
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
     * @return bool|null
     */
    public function getSubscribed() : ?bool
    {
        return $this->subscribed;
    }
    /**
     * 
     *
     * @param bool|null $subscribed
     *
     * @return self
     */
    public function setSubscribed(?bool $subscribed) : self
    {
        $this->subscribed = $subscribed;
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