<?php

namespace JoliCode\Slack\Api\Model;

class ObjsMessage
{
    /**
     * 
     *
     * @var ObjsMessageAttachmentsItem[]|null
     */
    protected $attachments;
    /**
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @var BlocksItem[]|null
     */
    protected $blocks;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $botId;
    /**
     * 
     *
     * @var ObjsBotProfile|null
     */
    protected $botProfile;
    /**
     * 
     *
     * @var string|null
     */
    protected $clientMsgId;
    /**
     * 
     *
     * @var ObjsComment|null
     */
    protected $comment;
    /**
     * 
     *
     * @var bool|null
     */
    protected $displayAsBot;
    /**
     * 
     *
     * @var ObjsFile|null
     */
    protected $file;
    /**
     * 
     *
     * @var ObjsFile[]|null
     */
    protected $files;
    /**
     * 
     *
     * @var ObjsMessageIcons|null
     */
    protected $icons;
    /**
     * 
     *
     * @var string|null
     */
    protected $inviter;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isDelayedMessage;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isIntro;
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
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $oldName;
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
    protected $permalink;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $pinnedTo;
    /**
     * 
     *
     * @var string|null
     */
    protected $purpose;
    /**
     * 
     *
     * @var ObjsReaction[]|null
     */
    protected $reactions;
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
    protected $subtype;
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
    protected $topic;
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
     * @var bool|null
     */
    protected $upload;
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
     * @var string|null
     */
    protected $username;
    /**
     * 
     *
     * @return ObjsMessageAttachmentsItem[]|null
     */
    public function getAttachments() : ?array
    {
        return $this->attachments;
    }
    /**
     * 
     *
     * @param ObjsMessageAttachmentsItem[]|null $attachments
     *
     * @return self
     */
    public function setAttachments(?array $attachments) : self
    {
        $this->attachments = $attachments;
        return $this;
    }
    /**
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @return BlocksItem[]|null
     */
    public function getBlocks() : ?array
    {
        return $this->blocks;
    }
    /**
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @param BlocksItem[]|null $blocks
     *
     * @return self
     */
    public function setBlocks(?array $blocks) : self
    {
        $this->blocks = $blocks;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getBotId()
    {
        return $this->botId;
    }
    /**
     * 
     *
     * @param mixed $botId
     *
     * @return self
     */
    public function setBotId($botId) : self
    {
        $this->botId = $botId;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsBotProfile|null
     */
    public function getBotProfile() : ?ObjsBotProfile
    {
        return $this->botProfile;
    }
    /**
     * 
     *
     * @param ObjsBotProfile|null $botProfile
     *
     * @return self
     */
    public function setBotProfile(?ObjsBotProfile $botProfile) : self
    {
        $this->botProfile = $botProfile;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getClientMsgId() : ?string
    {
        return $this->clientMsgId;
    }
    /**
     * 
     *
     * @param string|null $clientMsgId
     *
     * @return self
     */
    public function setClientMsgId(?string $clientMsgId) : self
    {
        $this->clientMsgId = $clientMsgId;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsComment|null
     */
    public function getComment() : ?ObjsComment
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param ObjsComment|null $comment
     *
     * @return self
     */
    public function setComment(?ObjsComment $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDisplayAsBot() : ?bool
    {
        return $this->displayAsBot;
    }
    /**
     * 
     *
     * @param bool|null $displayAsBot
     *
     * @return self
     */
    public function setDisplayAsBot(?bool $displayAsBot) : self
    {
        $this->displayAsBot = $displayAsBot;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsFile|null
     */
    public function getFile() : ?ObjsFile
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param ObjsFile|null $file
     *
     * @return self
     */
    public function setFile(?ObjsFile $file) : self
    {
        $this->file = $file;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsFile[]|null
     */
    public function getFiles() : ?array
    {
        return $this->files;
    }
    /**
     * 
     *
     * @param ObjsFile[]|null $files
     *
     * @return self
     */
    public function setFiles(?array $files) : self
    {
        $this->files = $files;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsMessageIcons|null
     */
    public function getIcons() : ?ObjsMessageIcons
    {
        return $this->icons;
    }
    /**
     * 
     *
     * @param ObjsMessageIcons|null $icons
     *
     * @return self
     */
    public function setIcons(?ObjsMessageIcons $icons) : self
    {
        $this->icons = $icons;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInviter() : ?string
    {
        return $this->inviter;
    }
    /**
     * 
     *
     * @param string|null $inviter
     *
     * @return self
     */
    public function setInviter(?string $inviter) : self
    {
        $this->inviter = $inviter;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsDelayedMessage() : ?bool
    {
        return $this->isDelayedMessage;
    }
    /**
     * 
     *
     * @param bool|null $isDelayedMessage
     *
     * @return self
     */
    public function setIsDelayedMessage(?bool $isDelayedMessage) : self
    {
        $this->isDelayedMessage = $isDelayedMessage;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsIntro() : ?bool
    {
        return $this->isIntro;
    }
    /**
     * 
     *
     * @param bool|null $isIntro
     *
     * @return self
     */
    public function setIsIntro(?bool $isIntro) : self
    {
        $this->isIntro = $isIntro;
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
    public function getOldName() : ?string
    {
        return $this->oldName;
    }
    /**
     * 
     *
     * @param string|null $oldName
     *
     * @return self
     */
    public function setOldName(?string $oldName) : self
    {
        $this->oldName = $oldName;
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
    public function getPermalink() : ?string
    {
        return $this->permalink;
    }
    /**
     * 
     *
     * @param string|null $permalink
     *
     * @return self
     */
    public function setPermalink(?string $permalink) : self
    {
        $this->permalink = $permalink;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getPinnedTo() : ?array
    {
        return $this->pinnedTo;
    }
    /**
     * 
     *
     * @param string[]|null $pinnedTo
     *
     * @return self
     */
    public function setPinnedTo(?array $pinnedTo) : self
    {
        $this->pinnedTo = $pinnedTo;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurpose() : ?string
    {
        return $this->purpose;
    }
    /**
     * 
     *
     * @param string|null $purpose
     *
     * @return self
     */
    public function setPurpose(?string $purpose) : self
    {
        $this->purpose = $purpose;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsReaction[]|null
     */
    public function getReactions() : ?array
    {
        return $this->reactions;
    }
    /**
     * 
     *
     * @param ObjsReaction[]|null $reactions
     *
     * @return self
     */
    public function setReactions(?array $reactions) : self
    {
        $this->reactions = $reactions;
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
    public function getSubtype() : ?string
    {
        return $this->subtype;
    }
    /**
     * 
     *
     * @param string|null $subtype
     *
     * @return self
     */
    public function setSubtype(?string $subtype) : self
    {
        $this->subtype = $subtype;
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
    public function getTopic() : ?string
    {
        return $this->topic;
    }
    /**
     * 
     *
     * @param string|null $topic
     *
     * @return self
     */
    public function setTopic(?string $topic) : self
    {
        $this->topic = $topic;
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
     * @return bool|null
     */
    public function getUpload() : ?bool
    {
        return $this->upload;
    }
    /**
     * 
     *
     * @param bool|null $upload
     *
     * @return self
     */
    public function setUpload(?bool $upload) : self
    {
        $this->upload = $upload;
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