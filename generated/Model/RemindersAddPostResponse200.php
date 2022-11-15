<?php

namespace JoliCode\Slack\Api\Model;

class RemindersAddPostResponse200
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
     * @var ObjsReminder|null
     */
    protected $reminder;
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
     * @return ObjsReminder|null
     */
    public function getReminder() : ?ObjsReminder
    {
        return $this->reminder;
    }
    /**
     * 
     *
     * @param ObjsReminder|null $reminder
     *
     * @return self
     */
    public function setReminder(?ObjsReminder $reminder) : self
    {
        $this->reminder = $reminder;
        return $this;
    }
}