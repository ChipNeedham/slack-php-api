<?php

namespace JoliCode\Slack\Api\Model;

class ObjsBotProfileIcons
{
    /**
     * 
     *
     * @var string|null
     */
    protected $image36;
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
    protected $image72;
    /**
     * 
     *
     * @return string|null
     */
    public function getImage36() : ?string
    {
        return $this->image36;
    }
    /**
     * 
     *
     * @param string|null $image36
     *
     * @return self
     */
    public function setImage36(?string $image36) : self
    {
        $this->image36 = $image36;
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
}