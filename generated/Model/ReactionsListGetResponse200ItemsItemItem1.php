<?php

namespace JoliCode\Slack\Api\Model;

class ReactionsListGetResponse200ItemsItemItem1
{
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