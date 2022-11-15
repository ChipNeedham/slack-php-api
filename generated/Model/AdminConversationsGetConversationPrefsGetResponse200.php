<?php

namespace JoliCode\Slack\Api\Model;

class AdminConversationsGetConversationPrefsGetResponse200
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var AdminConversationsGetConversationPrefsGetResponse200Prefs|null
     */
    protected $prefs;
    /**
     * 
     *
     * @return bool|null
     */
    public function getOk() : ?bool
    {
        return $this->ok;
    }
    /**
     * 
     *
     * @param bool|null $ok
     *
     * @return self
     */
    public function setOk(?bool $ok) : self
    {
        $this->ok = $ok;
        return $this;
    }
    /**
     * 
     *
     * @return AdminConversationsGetConversationPrefsGetResponse200Prefs|null
     */
    public function getPrefs() : ?AdminConversationsGetConversationPrefsGetResponse200Prefs
    {
        return $this->prefs;
    }
    /**
     * 
     *
     * @param AdminConversationsGetConversationPrefsGetResponse200Prefs|null $prefs
     *
     * @return self
     */
    public function setPrefs(?AdminConversationsGetConversationPrefsGetResponse200Prefs $prefs) : self
    {
        $this->prefs = $prefs;
        return $this;
    }
}