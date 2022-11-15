<?php

namespace JoliCode\Slack\Api\Model;

class UsersIdentityGetResponse200Item1Team
{
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
}