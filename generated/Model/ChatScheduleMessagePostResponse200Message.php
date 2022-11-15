<?php

namespace JoliCode\Slack\Api\Model;

class ChatScheduleMessagePostResponse200Message
{
    /**
     * 
     *
     * @var ChatScheduleMessagePostResponse200MessageAttachmentsItem[]|null
     */
    protected $attachments;
    /**
     * 
     *
     * @var string|null
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
     * @var string|null
     */
    protected $username;
    /**
     * 
     *
     * @return ChatScheduleMessagePostResponse200MessageAttachmentsItem[]|null
     */
    public function getAttachments() : ?array
    {
        return $this->attachments;
    }
    /**
     * 
     *
     * @param ChatScheduleMessagePostResponse200MessageAttachmentsItem[]|null $attachments
     *
     * @return self
     */
    public function setAttachments(?array $attachments) : self
    {
        $this->attachments = $attachments;
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