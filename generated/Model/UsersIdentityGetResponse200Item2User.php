<?php

namespace JoliCode\Slack\Api\Model;

class UsersIdentityGetResponse200Item2User
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
     * @var string|null
     */
    protected $image192;
    /**
     * 
     *
     * @var string|null
     */
    protected $image24;
    /**
     * 
     *
     * @var string|null
     */
    protected $image32;
    /**
     * 
     *
     * @var string|null
     */
    protected $image48;
    /**
     * 
     *
     * @var string|null
     */
    protected $image512;
    /**
     * 
     *
     * @var string|null
     */
    protected $image72;
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
    public function getImage192() : ?string
    {
        return $this->image192;
    }
    /**
     * 
     *
     * @param string|null $image192
     *
     * @return self
     */
    public function setImage192(?string $image192) : self
    {
        $this->image192 = $image192;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage24() : ?string
    {
        return $this->image24;
    }
    /**
     * 
     *
     * @param string|null $image24
     *
     * @return self
     */
    public function setImage24(?string $image24) : self
    {
        $this->image24 = $image24;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage32() : ?string
    {
        return $this->image32;
    }
    /**
     * 
     *
     * @param string|null $image32
     *
     * @return self
     */
    public function setImage32(?string $image32) : self
    {
        $this->image32 = $image32;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage48() : ?string
    {
        return $this->image48;
    }
    /**
     * 
     *
     * @param string|null $image48
     *
     * @return self
     */
    public function setImage48(?string $image48) : self
    {
        $this->image48 = $image48;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage512() : ?string
    {
        return $this->image512;
    }
    /**
     * 
     *
     * @param string|null $image512
     *
     * @return self
     */
    public function setImage512(?string $image512) : self
    {
        $this->image512 = $image512;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage72() : ?string
    {
        return $this->image72;
    }
    /**
     * 
     *
     * @param string|null $image72
     *
     * @return self
     */
    public function setImage72(?string $image72) : self
    {
        $this->image72 = $image72;
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