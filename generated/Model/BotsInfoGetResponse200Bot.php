<?php

namespace JoliCode\Slack\Api\Model;

class BotsInfoGetResponse200Bot
{
    /**
     * 
     *
     * @var string|null
     */
    protected $appId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * 
     *
     * @var BotsInfoGetResponse200BotIcons|null
     */
    protected $icons;
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $updated;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
    /**
     * 
     *
     * @return string|null
     */
    public function getAppId() : ?string
    {
        return $this->appId;
    }
    /**
     * 
     *
     * @param string|null $appId
     *
     * @return self
     */
    public function setAppId(?string $appId) : self
    {
        $this->appId = $appId;
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
     * @return BotsInfoGetResponse200BotIcons|null
     */
    public function getIcons() : ?BotsInfoGetResponse200BotIcons
    {
        return $this->icons;
    }
    /**
     * 
     *
     * @param BotsInfoGetResponse200BotIcons|null $icons
     *
     * @return self
     */
    public function setIcons(?BotsInfoGetResponse200BotIcons $icons) : self
    {
        $this->icons = $icons;
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
     * @return int|null
     */
    public function getUpdated() : ?int
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param int|null $updated
     *
     * @return self
     */
    public function setUpdated(?int $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId() : ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
}