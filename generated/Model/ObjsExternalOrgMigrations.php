<?php

namespace JoliCode\Slack\Api\Model;

class ObjsExternalOrgMigrations
{
    /**
     * 
     *
     * @var ObjsExternalOrgMigrationsCurrentItem[]|null
     */
    protected $current;
    /**
     * 
     *
     * @var int|null
     */
    protected $dateUpdated;
    /**
     * 
     *
     * @return ObjsExternalOrgMigrationsCurrentItem[]|null
     */
    public function getCurrent() : ?array
    {
        return $this->current;
    }
    /**
     * 
     *
     * @param ObjsExternalOrgMigrationsCurrentItem[]|null $current
     *
     * @return self
     */
    public function setCurrent(?array $current) : self
    {
        $this->current = $current;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDateUpdated() : ?int
    {
        return $this->dateUpdated;
    }
    /**
     * 
     *
     * @param int|null $dateUpdated
     *
     * @return self
     */
    public function setDateUpdated(?int $dateUpdated) : self
    {
        $this->dateUpdated = $dateUpdated;
        return $this;
    }
}