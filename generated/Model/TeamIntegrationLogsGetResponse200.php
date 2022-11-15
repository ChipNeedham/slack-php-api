<?php

namespace JoliCode\Slack\Api\Model;

class TeamIntegrationLogsGetResponse200
{
    /**
     * 
     *
     * @var TeamIntegrationLogsGetResponse200LogsItem[]|null
     */
    protected $logs;
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
     * @return TeamIntegrationLogsGetResponse200LogsItem[]|null
     */
    public function getLogs() : ?array
    {
        return $this->logs;
    }
    /**
     * 
     *
     * @param TeamIntegrationLogsGetResponse200LogsItem[]|null $logs
     *
     * @return self
     */
    public function setLogs(?array $logs) : self
    {
        $this->logs = $logs;
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