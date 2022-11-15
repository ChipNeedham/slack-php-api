<?php

namespace JoliCode\Slack\Api\Model;

class TeamAccessLogsGetResponse200
{
    /**
     * 
     *
     * @var TeamAccessLogsGetResponse200LoginsItem[]|null
     */
    protected $logins;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var ObjsPaging|null
     */
    protected $paging;
    /**
     * 
     *
     * @return TeamAccessLogsGetResponse200LoginsItem[]|null
     */
    public function getLogins() : ?array
    {
        return $this->logins;
    }
    /**
     * 
     *
     * @param TeamAccessLogsGetResponse200LoginsItem[]|null $logins
     *
     * @return self
     */
    public function setLogins(?array $logins) : self
    {
        $this->logins = $logins;
        return $this;
    }
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
     * @return ObjsPaging|null
     */
    public function getPaging() : ?ObjsPaging
    {
        return $this->paging;
    }
    /**
     * 
     *
     * @param ObjsPaging|null $paging
     *
     * @return self
     */
    public function setPaging(?ObjsPaging $paging) : self
    {
        $this->paging = $paging;
        return $this;
    }
}