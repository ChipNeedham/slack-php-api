<?php

namespace JoliCode\Slack\Api\Model;

class ObjsConversationDisplayCounts
{
    /**
     * 
     *
     * @var int|null
     */
    protected $displayCounts;
    /**
     * 
     *
     * @var int|null
     */
    protected $guestCounts;
    /**
     * 
     *
     * @return int|null
     */
    public function getDisplayCounts() : ?int
    {
        return $this->displayCounts;
    }
    /**
     * 
     *
     * @param int|null $displayCounts
     *
     * @return self
     */
    public function setDisplayCounts(?int $displayCounts) : self
    {
        $this->displayCounts = $displayCounts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGuestCounts() : ?int
    {
        return $this->guestCounts;
    }
    /**
     * 
     *
     * @param int|null $guestCounts
     *
     * @return self
     */
    public function setGuestCounts(?int $guestCounts) : self
    {
        $this->guestCounts = $guestCounts;
        return $this;
    }
}