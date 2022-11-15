<?php

namespace JoliCode\Slack\Api\Model;

class UsersInfoGetResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * Merged user object for non enterprise type and enterprise user
     *
     * @var ObjsUser|null
     */
    protected $user;
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
     * Merged user object for non enterprise type and enterprise user
     *
     * @return ObjsUser|null
     */
    public function getUser() : ?ObjsUser
    {
        return $this->user;
    }
    /**
     * Merged user object for non enterprise type and enterprise user
     *
     * @param ObjsUser|null $user
     *
     * @return self
     */
    public function setUser(?ObjsUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
}