<?php

namespace JoliCode\Slack\Api\Model;

class AppsPermissionsInfoGetResponse200
{
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200Info|null
     */
    protected $info;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200Info|null
     */
    public function getInfo() : ?AppsPermissionsInfoGetResponse200Info
    {
        return $this->info;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200Info|null $info
     *
     * @return self
     */
    public function setInfo(?AppsPermissionsInfoGetResponse200Info $info) : self
    {
        $this->info = $info;
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
}