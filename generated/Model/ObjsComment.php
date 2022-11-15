<?php

namespace JoliCode\Slack\Api\Model;

class ObjsComment
{
    /**
     * 
     *
     * @var string|null
     */
    protected $comment;
    /**
     * 
     *
     * @var int|null
     */
    protected $created;
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
     * @var int|null
     */
    protected $numStars;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $pinnedInfo;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $pinnedTo;
    /**
     * 
     *
     * @var ObjsReaction[]|null
     */
    protected $reactions;
    /**
     * 
     *
     * @var int|string|null
     */
    protected $timestamp;
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
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment) : self
    {
        $this->comment = $comment;
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
     * @return int|null
     */
    public function getNumStars() : ?int
    {
        return $this->numStars;
    }
    /**
     * 
     *
     * @param int|null $numStars
     *
     * @return self
     */
    public function setNumStars(?int $numStars) : self
    {
        $this->numStars = $numStars;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPinnedInfo()
    {
        return $this->pinnedInfo;
    }
    /**
     * 
     *
     * @param mixed $pinnedInfo
     *
     * @return self
     */
    public function setPinnedInfo($pinnedInfo) : self
    {
        $this->pinnedInfo = $pinnedInfo;
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
     * @return int|string|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param int|string|null $timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp) : self
    {
        $this->timestamp = $timestamp;
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