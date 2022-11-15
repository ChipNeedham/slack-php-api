<?php

namespace JoliCode\Slack\Api\Model;

class ObjsTeamProfileFieldOption
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $isCustom;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isMultipleEntry;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isProtected;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isScim;
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsCustom() : ?bool
    {
        return $this->isCustom;
    }
    /**
     * 
     *
     * @param bool|null $isCustom
     *
     * @return self
     */
    public function setIsCustom(?bool $isCustom) : self
    {
        $this->isCustom = $isCustom;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsMultipleEntry() : ?bool
    {
        return $this->isMultipleEntry;
    }
    /**
     * 
     *
     * @param bool|null $isMultipleEntry
     *
     * @return self
     */
    public function setIsMultipleEntry(?bool $isMultipleEntry) : self
    {
        $this->isMultipleEntry = $isMultipleEntry;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsProtected() : ?bool
    {
        return $this->isProtected;
    }
    /**
     * 
     *
     * @param bool|null $isProtected
     *
     * @return self
     */
    public function setIsProtected(?bool $isProtected) : self
    {
        $this->isProtected = $isProtected;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsScim() : ?bool
    {
        return $this->isScim;
    }
    /**
     * 
     *
     * @param bool|null $isScim
     *
     * @return self
     */
    public function setIsScim(?bool $isScim) : self
    {
        $this->isScim = $isScim;
        return $this;
    }
}