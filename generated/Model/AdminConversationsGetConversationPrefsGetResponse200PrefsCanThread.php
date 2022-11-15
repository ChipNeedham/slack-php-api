<?php

namespace JoliCode\Slack\Api\Model;

class AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $type;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $user;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getType() : ?array
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string[]|null $type
     *
     * @return self
     */
    public function setType(?array $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getUser() : ?array
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string[]|null $user
     *
     * @return self
     */
    public function setUser(?array $user) : self
    {
        $this->user = $user;
        return $this;
    }
}