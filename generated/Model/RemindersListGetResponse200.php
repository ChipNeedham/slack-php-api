<?php

namespace JoliCode\Slack\Api\Model;

class RemindersListGetResponse200
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
     * @var ObjsReminder[]|null
     */
    protected $reminders;
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
     * @return ObjsReminder[]|null
     */
    public function getReminders() : ?array
    {
        return $this->reminders;
    }
    /**
     * 
     *
     * @param ObjsReminder[]|null $reminders
     *
     * @return self
     */
    public function setReminders(?array $reminders) : self
    {
        $this->reminders = $reminders;
        return $this;
    }
}