<?php

namespace JoliCode\Slack\Api\Model;

class AdminConversationsGetConversationPrefsGetResponse200Prefs
{
    /**
     * 
     *
     * @var AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread|null
     */
    protected $canThread;
    /**
     * 
     *
     * @var AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost|null
     */
    protected $whoCanPost;
    /**
     * 
     *
     * @return AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread|null
     */
    public function getCanThread() : ?AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread
    {
        return $this->canThread;
    }
    /**
     * 
     *
     * @param AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread|null $canThread
     *
     * @return self
     */
    public function setCanThread(?AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread $canThread) : self
    {
        $this->canThread = $canThread;
        return $this;
    }
    /**
     * 
     *
     * @return AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost|null
     */
    public function getWhoCanPost() : ?AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost
    {
        return $this->whoCanPost;
    }
    /**
     * 
     *
     * @param AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost|null $whoCanPost
     *
     * @return self
     */
    public function setWhoCanPost(?AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost $whoCanPost) : self
    {
        $this->whoCanPost = $whoCanPost;
        return $this;
    }
}