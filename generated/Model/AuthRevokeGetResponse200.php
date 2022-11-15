<?php

namespace JoliCode\Slack\Api\Model;

class AuthRevokeGetResponse200
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
     * @var bool|null
     */
    protected $revoked;
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
     * @return bool|null
     */
    public function getRevoked() : ?bool
    {
        return $this->revoked;
    }
    /**
     * 
     *
     * @param bool|null $revoked
     *
     * @return self
     */
    public function setRevoked(?bool $revoked) : self
    {
        $this->revoked = $revoked;
        return $this;
    }
}