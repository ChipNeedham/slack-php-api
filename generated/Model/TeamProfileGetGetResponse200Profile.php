<?php

namespace JoliCode\Slack\Api\Model;

class TeamProfileGetGetResponse200Profile
{
    /**
     * 
     *
     * @var ObjsTeamProfileField[]|null
     */
    protected $fields;
    /**
     * 
     *
     * @return ObjsTeamProfileField[]|null
     */
    public function getFields() : ?array
    {
        return $this->fields;
    }
    /**
     * 
     *
     * @param ObjsTeamProfileField[]|null $fields
     *
     * @return self
     */
    public function setFields(?array $fields) : self
    {
        $this->fields = $fields;
        return $this;
    }
}