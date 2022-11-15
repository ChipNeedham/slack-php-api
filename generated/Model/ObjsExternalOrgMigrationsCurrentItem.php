<?php

namespace JoliCode\Slack\Api\Model;

class ObjsExternalOrgMigrationsCurrentItem
{
    /**
     * 
     *
     * @var int|null
     */
    protected $dateStarted;
    /**
     * 
     *
     * @var string|null
     */
    protected $teamId;
    /**
     * 
     *
     * @return int|null
     */
    public function getDateStarted() : ?int
    {
        return $this->dateStarted;
    }
    /**
     * 
     *
     * @param int|null $dateStarted
     *
     * @return self
     */
    public function setDateStarted(?int $dateStarted) : self
    {
        $this->dateStarted = $dateStarted;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeamId() : ?string
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param string|null $teamId
     *
     * @return self
     */
    public function setTeamId(?string $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
}