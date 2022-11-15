<?php

namespace JoliCode\Slack\Api\Model;

class PinsListGetResponse200Item0ItemsItem0
{
    /**
     * 
     *
     * @var int|null
     */
    protected $created;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * 
     *
     * @var ObjsFile|null
     */
    protected $file;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @return int|null
     */
    public function getCreated() : ?int
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param int|null $created
     *
     * @return self
     */
    public function setCreated(?int $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatedBy() : ?string
    {
        return $this->createdBy;
    }
    /**
     * 
     *
     * @param string|null $createdBy
     *
     * @return self
     */
    public function setCreatedBy(?string $createdBy) : self
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsFile|null
     */
    public function getFile() : ?ObjsFile
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param ObjsFile|null $file
     *
     * @return self
     */
    public function setFile(?ObjsFile $file) : self
    {
        $this->file = $file;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}