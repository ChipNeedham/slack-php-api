<?php

namespace JoliCode\Slack\Api\Model;

class ObjsMessageAttachmentsItemFieldsItem
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $short;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $value;
    /**
     * 
     *
     * @return bool|null
     */
    public function getShort() : ?bool
    {
        return $this->short;
    }
    /**
     * 
     *
     * @param bool|null $short
     *
     * @return self
     */
    public function setShort(?bool $short) : self
    {
        $this->short = $short;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->value = $value;
        return $this;
    }
}