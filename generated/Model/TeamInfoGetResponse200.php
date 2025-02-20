<?php

namespace JoliCode\Slack\Api\Model;

class TeamInfoGetResponse200
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
     * @var ObjsTeam|null
     */
    protected $team;
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
     * @return ObjsTeam|null
     */
    public function getTeam() : ?ObjsTeam
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param ObjsTeam|null $team
     *
     * @return self
     */
    public function setTeam(?ObjsTeam $team) : self
    {
        $this->team = $team;
        return $this;
    }
}