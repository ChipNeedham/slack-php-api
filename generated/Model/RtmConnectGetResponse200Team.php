<?php

namespace JoliCode\Slack\Api\Model;

class RtmConnectGetResponse200Team
{
    /**
     * 
     *
     * @var string|null
     */
    protected $domain;
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @return string|null
     */
    public function getDomain() : ?string
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param string|null $domain
     *
     * @return self
     */
    public function setDomain(?string $domain) : self
    {
        $this->domain = $domain;
        return $this;
    }
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
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}